---
title: Databunker installation guide
linktitle: Databunker installation guide
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: doc
# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 30
---

## Method 1: Quick installation method

The easiest way to begin with Databunker is to deploy it as a standard Docker container with minimal parameters. In this setup, it will utilize an internal built-in **SQLite database** to store encrypted records. This method is suitable for development purposes and is not recommended for production environments.

**Advantages:**
* No need for an external database
* Simple setup process; just run it and it works
* You can use `DEMO` as a root token
* Suitable for local development
* Requires only one container

**Disadvantages:**
* Utilizes a local SQLite database for storing encrypted records
* Lack of security; using ``DEMO`` as a root access token
* All data will be lost when the container is stopped
* Not recommended for production use

### Getting started:

To launch the service, run the following command:

```
docker run -p 3000:3000 -d --rm --name databunker securitybunker/databunker demo
```

The Databunker service will be accessible on port ``3000``.

You can then open your browser and navigate to <a href="http://localhost:3000/" target="_blank">http://localhost:3000/</a> to access the product's user interface.

`Note:` If the Docker container is stopped or terminated abruptly, all data will be lost.

### How to prevent data loss
You need to mount the data directory from your host machine inside the Databunker container and provide the **DATABUNKER_MASTERKEY**, which can be extracted from the Databunker container logs (use docker logs dbunker). This key is printed during the service initialization.

Execute the following commands:

```
mkdir ~/data
chmod 0777 ~/data
docker run -v ~/data:/databunker/data \
  -p 3000:3000 \
  -e DATABUNKER_MASTERKEY=< copy this value from docker log> \
  --rm --name databunker securitybunker/databunker demo
```

&nbsp;

## Method 2: Start Databunker container with docker compose

Before starting the Databunker container using Docker Compose, you'll need to generate secrets required by the application. These could include passwords for MySQL or PostgreSQL databases, a self-signed SSL certificate, the Databunker root token, etc.

For instance, the **DATABUNKER_ROOTTOKEN** variable will be stored in the ``.env/databunker-root.env`` file. You can utilize this variable as a root token when making Databunker API requests.

The required secret files will be saved into the ``./env`` directory. Use one of the following scripts found in the project's Git repository to generate configuration secrets:

* ./generate-mysql-env-files.sh
* ./generate-mysql-demo-env-files.sh
* ./generate-pgsql-env-files.sh
* ./generate-pgsql-demo-env-files.sh

Then, you can use the following command to start Databunker with MySQL:
```
docker-compose -f docker-compose-mysql.yml up -d
```

Or, you can use the following command to start Databunker with PostgreSQL:
```
docker-compose -f docker-compose-pgsql.yml up -d
```

Once started, you can access Databunker by opening your browser and navigating to <a href="http://localhost:3000/" target="_blank">http://localhost:3000/</a>.

&nbsp;

## Method 3: Automatic deployment in AWS cloud

We have built Terraform configuration files and Helm charts to deploy Databunker with all required components in AWS. Detailed instructions can be found here:

* https://github.com/securitybunker/databunker/tree/master/terraform/aws
* https://github.com/securitybunker/databunker/tree/master/charts/databunker


&nbsp;

## Method 4: Step-by-step production installation

**Start with backend server**

For production installation, you can use **MySQL** or **PostgreSQL** backend database. It will be used to store encrypted user records. For example, you can spin MySQL or PostgreSQL as a Docker container or use a cloud RDS version provided by Google Cloud and AWS, etc... Just make sure to create a database for storing Databunker records and create a database user to allow Databunker access to backend database.

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

Databunker has a configuration file that you can alter to enable custom email gateway, SMS gateway configuration,
service logo, etc...

There is a number of ways you can change the configuration file in the container, for example by creating your own Docker file.
Another option is to create a configuration file outside of the container in conf/ directory and mount this directory in the container.

**You can do it as following:**

1. Download the default configuration file and place it in ~/conf/ directory.

```
mkdir ~/conf
curl https://raw.githubusercontent.com/securitybunker/databunker/master/databunker.yaml \ 
  -o ~/conf/databunker.yaml
```

2. After that, you can alter the configuration file with your editor: **~/conf/databunker.yaml**

3. Run container with the following additional command argument `-v ~/conf:/databunker/conf`.

For example, you can start Databunker as following:

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

## SSL certificates

You can generate SSL certificates and place them in the `/databunker/certs` directory in the running container.

For example, you can do this by mounting `/databunker/certs` to a local **~/certs/** directory as:

```
cd ~
mkdir -p certs
# generate certificates, check bellow
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

So, you need to prepare server.cer and server.key files.

**Generate self-signed certificates**

You can do the following command to generate one:

```
cd ~
mkdir -p certs
cd certs
openssl req -new -newkey rsa:4096 -days 365 -nodes -x509 \
    -subj "/C=UK/ST=/L=London/O=Your-company Ltd./CN=databunker.your-company.com" \
    -keyout server.key -out server.cer
```

**Use certificates generated by Letsencrypt**

Copy Letsencrypt generated file **privkey.pem** to ~/certs/server.key

Copy Letsencrypt generated file **fullchain.pem** file to ~/certs/server.cer


## Create a test record

You can download and run a small test script that will create a user record, user app record, user consent, etc...

```
curl https://raw.githubusercontent.com/securitybunker/databunker/master/create-test-user.sh -o test.sh
chmod 755 ./test.sh
./test.sh DEMO
```

```DEMO``` is a root token. In your production environment is must be diferent.


You can now open browser at http://localhost:3000/

Use the following account details:

Email: test@securitybunker.io

Phone: 4444

Code: 4444
