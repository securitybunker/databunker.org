---
title: Detailed installation guide
linktitle: Databunker installation guide
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: doc
# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 30
---
## Method 1: Quick installation

* The easiest way to start using Databunker is to deploy it as a standard Docker container with minimal parameters.
* In this setup, it uses an internal **SQLite database** to store encrypted records.
* You can use `DEMO` as a root token when making [API requests](https://documenter.getpostman.com/view/11310294/Szmcbz32)

**Disadvantages:**
* Utilizes a local SQLite database for storing encrypted records
* Lack of security; using ``DEMO`` as a root access token
* Not recommended for production use

**Run the following commands to start Databunker:**

```
DATABUNKER_MASTERKEY=`< /dev/urandom LC_CTYPE=C tr -dc 'a-f0-9' | head -c${1:-48};`
echo "DATABUNKER_MASTERKEY value is $DATABUNKER_MASTERKEY"
docker run -p 3000:3000 -d -e DATABUNKER_MASTERKEY=$DATABUNKER_MASTERKEY --name databunker securitybunker/databunker demo
```

The first command generates the encryption key for Databunker's internal database. Be sure to save it for future use.

Open your browser and navigate to <a href="http://localhost:3000/" target="_blank">http://localhost:3000/</a> to access the product's user interface.

`Note:`
* If the **databunker** container stops, you can restart the service by running ``docker start databunker``.
* For production environments, we recommend using a MySQL or PostgreSQL backend instead.

## Method 2: Start Databunker and backend db with docker compose

We prepared a number of scripts and configuration files you can use with Docker Compose. All these files are available in the project's <a href="https://github.com/securitybunker/databunker#readme" target="_blank">github repository</a>.

Before starting Docker Compose, you need to generate several secret variables used by the containers. These variables include:
* Passwords for MySQL or PostgreSQL databases
* A self-signed SSL certificate
* Databunker root token, and more

For instance, the **DATABUNKER_ROOTTOKEN** variable will be stored in the ``.env/databunker-root.env`` file. This value is used as the root token when making Databunker API requests.

The required secret files will be saved in the ``.env`` directory. Use one of the following scripts from the project's GitHub repository to generate configuration secrets:

* ./generate-mysql-env-files.sh
* ./generate-mysql-demo-env-files.sh
* ./generate-pgsql-env-files.sh
* ./generate-pgsql-demo-env-files.sh

After generating the secrets, you can start Databunker with MySQL using:
```
docker-compose -f docker-compose-mysql.yml up -d
```

Or, start Databunker with PostgreSQL using:
```
docker-compose -f docker-compose-pgsql.yml up -d
```

Once started, you can access Databunker by opening your browser and navigating to <a href="http://localhost:3000/" target="_blank">http://localhost:3000/</a>.

## Method 3: Automatic deployment in AWS cloud

We have built Terraform configuration files and Helm charts to deploy Databunker with all required components in AWS. Detailed instructions can be found here:

* https://github.com/securitybunker/databunker/tree/master/terraform/aws
* https://github.com/securitybunker/databunker/tree/master/charts/databunker

## Method 4: Step-by-step production installation

**Start with backend database**

For production installation, you can use **MySQL** or **PostgreSQL** backend databases. This databse will be used to store encrypted user records. For example, you can spin MySQL or PostgreSQL as a container or use a cloud RDS version provided by Google Cloud and AWS, etc...

For example, use the following command to start MySQL server. It will create a `databunkerdb` database for Databunker and create `bunkeruser` for Databunker access to MySQL.

```
mkdir ~/data
chmod 0777 ~/data
docker run --restart unless-stopped \
  -v ~/data:/var/lib/mysql \
  -e MYSQL_ROOT_PASSWORD=SuperAdmin4        \
  -e MYSQL_DATABASE=databunkerdb            \
  -e MYSQL_USER=bunkeruser                  \
  -e MYSQL_PASSWORD=BunkerUserPassword4     \
  --name=mysqlsrv -d mysql/mysql-server
```

`Note:` make sure to change the passwords above.

**First Databunker initialization step**

Before Databunker can serve user requests it needs to create all tables; generate a master encryption key if not provided; generate root access token if not provided. This process is called **Databunker initialization**. You will need to do it just for the first time.

Run the following command to initialize Databunker:

```
docker run --rm -it --link mysqlsrv           \
  -e MYSQL_HOST=mysqlsrv                     \
  -e MYSQL_PORT=3306                         \
  -e MYSQL_USER_NAME=bunkeruser              \
  -e MYSQL_USER_PASS=BunkerUserPassword4     \
  --entrypoint /bin/sh                       \
  --name dbunker securitybunker/databunker      \
  -c '/databunker/bin/databunker -init -db databunkerdb -conf /databunker/conf/databunker.yaml'
```

In the command output, you will see the `Master key` and `API Root token` values.

**Start the Databunker service**

After extracting `DATABUNKER_MASTERKEY` you can start the Databunker service using the following command:

```
docker run --restart unless-stopped -d -p 3000:3000 \
  --link mysqlsrv -e MYSQL_HOST=mysqlsrv            \
  -e DATABUNKER_MASTERKEY=8c9e892a1732881e14960f2b0437a720ad01ae47cd23baa7 \
  -e MYSQL_PORT=3306                                \
  -e MYSQL_USER_NAME=bunkeruser                     \
  -e MYSQL_USER_PASS=BunkerUserPassword4            \
  --entrypoint /bin/sh                              \
  --name dbunker securitybunker/databunker             \
  -c '/databunker/bin/databunker -db databunkerdb -conf /databunker/conf/databunker.yaml'
  
```

## Advanced configuration

Databunker uses the ``databunker.yaml`` configuration file. You can modify this file to set custom email gateway, SMS gateway, service logo, and more.

There are several ways to load a new configuration file in Databunker:
* Build a new Docker container based on Databunker's Dockerfile and include your custom configuration file inside it
* Create a new configuration file and mount it to the Databunker container

Follow these steps to mount an external configuration file:

**Step 1. Download the default configuration file**

Create a ``./conf`` directory and download the default configuration file in it:

```
mkdir ~/conf
curl https://raw.githubusercontent.com/securitybunker/databunker/master/databunker.yaml \ 
  -o ~/conf/databunker.yaml
```

**Step 2: Modify the Configuration File**

Edit the configuration file with your changes: **~/conf/databunker.yaml**

**Step 3: Start the Databunker Container**

Use the following command to start the Databunker container with the custom configuration:

```
docker run --restart unless-stopped -d -p 3000:3000 -v ~/conf:/databunker/conf \
  --link mysqlsrv -e MYSQL_HOST=mysqlsrv            \
  -e DATABUNKER_MASTERKEY=8c9e892a1732881e14960f2b0437a720ad01ae47cd23baa7 \
  -e MYSQL_PORT=3306                                \
  -e MYSQL_USER_NAME=bunkeruser                     \
  -e MYSQL_USER_PASS=BunkerUserPassword4            \
  --entrypoint /bin/sh                              \
  --name dbunker securitybunker/databunker             \
  -c '/databunker/bin/databunker -db databunkerdb -conf /databunker/conf/databunker.yaml'
```

This command starts Databunker with the custom configuration file located in the ~/conf directory.

## SSL certificates

You can generate SSL certificates and place them in the `/databunker/certs` directory in the running container.

Use the following command to generate self-signed certificate:

```
cd ~
mkdir -p certs
cd certs
openssl req -new -newkey rsa:4096 -days 365 -nodes -x509 \
    -subj "/e=UK/ST=/L=London/O=Your-company Ltd./CN=databunker.your-company.com" \
    -keyout server.key -out server.cer
```

Next, map `/databunker/certs` directory inside container to the **~/certs/** directory as:

```
cd ~
docker run --restart unless-stopped -d -p 3000:3000 -v ~/conf:/databunker/conf -v ~/certs:/databunker/certs \
  --link mysqlsrv -e MYSQL_HOST=mysqlsrv            \
  -e DATABUNKER_MASTERKEY=8c9e892a1732881e14960f2b0437a720ad01ae47cd23baa7 \
  -e MYSQL_PORT=3306                                \
  -e MYSQL_USER_NAME=bunkeruser                     \
  -e MYSQL_USER_PASS=BunkerUserPassword4            \
  --entrypoint /bin/sh                              \
  --name dbunker securitybunker/databunker             \
  -c '/databunker/bin/databunker -db databunkerdb -conf /databunker/conf/databunker.yaml'
```

**Use certificates generated by Letsencrypt**

Copy Letsencrypt generated file **privkey.pem** to ~/certs/server.key

Copy Letsencrypt generated file **fullchain.pem** file to ~/certs/server.cer


## Create a test record

You can download and run a small test script that will create a user record, user app record, user consent, etc...

```
curl https://raw.githubusercontent.com/securitybunker/databunker/master/create-test-user.sh -o test.sh
chmod 755 ./test.sh
./test.sh <DATABUNKER_ROOTTOKEN>
```

### Built-in web UI

You can now open browser at http://localhost:3000/

Use the following account details:

Email: test@securitybunker.io

Phone: 4444

Code: 4444
