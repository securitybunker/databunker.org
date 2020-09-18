---
title: Databunker Installation Instruction
linktitle: Databunker Installation Instruction
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

You simply start Databunker as a basic Docker container with minimal parameters and minimal requirements. In this case, it will use an internal built-in SQLite database to store encrypted records. This installation method is good for development and not recommended for production.

**Advantages:**
* An external database is not required.
* You can use `DEMO` as a root token.
* Suitable for local development.
* You just run it and it works.
* Just one container.

**Disadvantages:**
* Local SQLite database will be used to store encrypted records. SQLite is not built for network access.
* No security. `DEMO` is a root access token and all records can be easily extracted.
* When the container is stopped the **data will be lost**.
* Not recommended for production.

Run the service as follows:

```
docker run -p 3000:3000 -d --rm --name dbunker \
  paranoidguy/databunker demo
```

Databunker service will listen for connections on port `3000`.

`Note:` if the Docker container is stopped or killed the **data will be lost**. To prevent the system from losing data you will need to create a directory to be used for data storage and mount it inside the container and provide **DATABUNKER_MASTERKEY** that you can extract from server logs. It is printed during service initialization. Run the following commands:

```
mkdir ~/data
chmod 0777 ~/data
docker run -v ~/data:/databunker/data -p 3000:3000 \
  -e DATABUNKER_MASTERKEY=1111111111111111111111111111111111111111
  --rm --name dbunker paranoidguy/databunker demo
```

## Production installation

**Start with backend server**

For production installation, we recommend you to use **MySQL** backend storage. MySQL server will be used for the storage of encrypted user records. For that, you will need to have a MySQL server running. For example, you can start it as a Docker container. Instead of MySQL started as a Docker container, you can use the cloud MySQL version provided by Google Cloud and AWS, etc... Just make sure to create a database for storing Databunker records and create a database user to allow Databunker access MySQL. Using the following command MySQL server will be started; it will create a `databunkerdb` database for Databunker and create `bunkeruser` for Databunker access to MySQL.

```
mkdir ~/data
chmod 0777 ~/data
docker run --restart unless-stopped -v ~/data:/var/lib/mysql \
  -e MYSQL_ROOT_PASSWORD=SuperAdmin4        \
  -e MYSQL_DATABASE=databunkerdb            \
  -e MYSQL_USER=bunkeruser                  \
  -e MYSQL_PASSWORD=BunkerUserPassword4     \
  --name=mysqlsrv -d mysql/mysql-server
```

`Note:` make sure to change the passwords above.

**First Databunker initialization**

Before Databunker can work it needs to create all tables; generate a master encryption key if not provided; generate root access token if not provided and save in encrypted form in the database. This process is called **Databunker initialization**. You will need to do it just for the first time.

Run the following command to initialize Databunker:

```
docker run --rm -it --link mysqlsrv           \
  -e MYSQL_HOST=mysqlsrv                     \
  -e MYSQL_POSR=3306                         \
  -e MYSQL_USER_NAME=bunkeruser              \
  -e MYSQL_USER_PASS=BunkerUserPassword4     \
  --entrypoint /bin/sh                       \
  --name dbunker paranoidguy/databunker      \
  -c '/databunker/bin/databunker -init -db databunkerdb -conf /databunker/conf/databunker.yaml'
```

In the command output, you will see the `Master key` and `API Root token` values.

**Start the Databunker service**

After extracting `DATABUNKER_MASTERKEY` you can start the Databunker service using the following command:

```
docker run --restart unless-stopped -d -p 3000:3000 \
  --link mysqlsrv -e MYSQL_HOST=mysqlsrv            \
  -e DATABUNKER_MASTERKEY=8c9e892a1732881e14960f2b0437a720ad01ae47cd23baa7 \
  -e MYSQL_POSR=3306                                \
  -e MYSQL_USER_NAME=bunkeruser                     \
  -e MYSQL_USER_PASS=BunkerUserPassword4            \
  --entrypoint /bin/sh                              \
  --name dbunker paranoidguy/databunker             \
  -c '/databunker/bin/databunker -db databunkerdb -conf /databunker/conf/databunker.yaml'
  
```


## Advanced configuration

**SSL certificates**

