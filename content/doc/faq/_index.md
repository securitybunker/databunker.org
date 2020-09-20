---
title: Project frequently-asked questions
linktitle: Project frequently-asked questions
toc: true
type: docs
date: "2019-05-05T00:00:00+01:00"
draft: false
menu:
  faq:
    name: Questions
    weight: 1

# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 1
---

## How do I search for all orders from a guy named John?

Databunker supports customer record lookup by **login name** or **email address** or **phone number** or **token value**.
So, if you have one of these values, you can fetch customer orders from the **orders table**.

## How to backup the Databunker database?

If case you are using MySQL as a Databunker backend database you can use the standard `mysqldump` command.

For SQLite,  Databunker has a special API call to dump the internal database. You can run the following command to dump the database in SQL format:

```
curl -s http://localhost:3000/v1/sys/backup -H "X-Bunker-Token: $TOKEN" -o backup.sql
```

## Does your product support multi-master replication?

For that will need to use MySQL as a backend database and configure database replication on the MySQL level. You will need to do it by yourself or use the cloud version provided by AWS, Google Cloud, Microsoft Azure, etc...

When `SQLite` is used it does not support database replication.

## Can my DBA tune database performance characteristics?

Almost all Databunker requests are using database-level indexes when performing API calls.
We would love your DBA to check product database schema for improvements. If we are missing something let us know.

## What is the difference between the tokenization solution XXX and Databunker?

Most commercial tokenization solutions are used to tokenize one specific record, for example, customer name or 
customer email, etc... These distinct records are not linked to one customer record. In our solution, we tokenize the 
whole customer record with all the details, which gives us many additional capabilities. So, in our system, the
**end customer** (**Natural person** or **data subject**) can "log-in" into his profile, change the personal records or
manage his consents, or ask for **forget me**. In addition, we provide many additional APIs to help with GDPR compliance.


## What is considered PII or what information is recommended to store in Databunker?

The following is a partial list.

| PII                           | PII                       |
| ----------------------------- | ------------------------- |
| * Name                        | * RFID                    |
| * Address                     | * Contacts                |
| * IP address                  | * Genetic info            |
| * Cookie data                 | * Passport data           |
| * Banking info                | * Driving license         |
| * Financial data              | * Mobile device ID        |
| * Browsing history            | * Personal ID number      |
| * Political opinion           | * Ethnic information      |
| * Sexual orientation          | * Health / medical data   |
| * Social Security Number      | * Etc...                  |


# Technology stack?

We use **go-lang** to build the whole project, with 80% automatic test coverage. The open-source version comes with an internal
database (**SQLite**) or an external database (**MySQL**) and Web UI as one executable file to make the project easy to deploy.

## Does the product support encryption in motion and encryption in storage?

For **encryption in motion** make sure to set up HTTPS SSL certificates. To stand **encryption in storage** requirements,
Databunker encrypts all customer personal information or securely hashed before storing it in the databases.

All customer records are encrypted with a 32 byte key comprizing of
**System Master key** (24 bytes, stored in memory, not on disk) and **customer record key** (8 bytes, stored on disk).
The **System Master key** is kept in RAM and is never stored to disk. Enterprise version supports **Master key split**. 

## Does Databunker is end-user facing?

Yes. The end-user, according to GDPR, the end-user must have control over the PII data. The user can change the personal data, give 
or withdraw consent, request forget-me. All user operations can be self-service (automatically enforced) or with DPO / Admin approval.

## Does Databunker is a wrapper for an existing database?

This product is not a wrapper for an existing database. It is a special service used to encrypt and store personal records
in a privacy-compliant way. The service provides a REST API to store and update user records in JSON format; 
customer-facing web UI to your csutomers to provide visibility into the customer's personal data.

