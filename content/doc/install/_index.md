---
title: Databunker installation guide
linktitle: Databunker installation guide
toc: true
type: docs
date: "2019-05-05T00:00:00+01:00"
draft: false
menu:
  install:
    name: Installation
    weight: 1

# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 1
---

## Quick installation guide

You simply start Databunker as a simple Docker container with minimal parameters and minimal requirements. In that case, it will use an internal built-in **SQLite** database to store encrypted records. This installation method is good for development and **not recommended for production** use.

**Advantages:**
* An external database is not required.
* You can use `DEMO` as a root token.
* Suitable for local development.
* You just run it and it works.
* Just one container.

**Disadvantages:**
* A local **SQLite** database will be used to store encrypted records. **SQLite** is not built for network access.
* No security. `DEMO` is a root access token and all records can be easily extracted.
* When the container is stopped the **data will be lost**.
* Not recommended for production.

### So, how to get started?

Run the service as the following command:

```
docker run -p 3000:3000 -d --rm --name dbunker securitybunker/databunker demo
```

Databunker service will listen for connections on port `3000`.

`Note:` if the Docker container is stopped or killed the **data will be lost**. To prevent the system from losing your data you will need to mount the **data** directory from your host machine inside this Databunker container and provide **DATABUNKER_MASTERKEY** that you can extract from a ```dbunker``` container logs (run ```docker logs dbunker```). It is printed during service initialization.

Run the following commands:

```
mkdir ~/data
chmod 0777 ~/data
docker run -v ~/data:/databunker/data \
  -p 3000:3000 \
  -e DATABUNKER_MASTERKEY=< copy this value from docker log> \
  --rm --name dbunker securitybunker/databunker demo
```

## Automatic production installation

You will need to run just 2 commands:

```
./generate-env-files.sh
docker-compose up
```

Now, open in your browser http://localhost:3000/

### How does this work?

```generate-env-files.sh``` command will generate all environment variables, generate random passwords,  master key, and root token. All variables will be saved under ```.env/``` folder.

For example, ```DATABUNKER_ROOTTOKEN``` variable will be saved in ```.env/databunker-root.env``` file. You can use this variable as a root token when calling Databunker API requests.


```docker-compose up``` command will start all containers. The initial setup might take 30 seconds. Ignore any errors printed during the first 30 seconds. The startup scripts have automatic retries.

## Step-by-step production installation

**Start with backend server**

For production installation, we recommend using **MySQL** backend storage. MySQL server will be used for the storage of encrypted user records. For that, you will need to have a MySQL server up and running. For example, you can spin MySQL as a Docker container or use a cloud MySQL version provided by Google Cloud and AWS, etc... Just make sure to create a database for storing Databunker records and create a database user to allow Databunker access to MySQL. Using the following command MySQL server will be started; it will create a `databunkerdb` database for Databunker and create `bunkeruser` for Databunker access to MySQL.

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

