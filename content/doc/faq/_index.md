---
title: Project frequently asked questions
linktitle: Frequently asked questions
toc: false
type: docs
date: "2021-05-05T00:00:00+01:00"
draft: false
mymenu: doc
# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 40
---

## Does Databunker work as CRUD for user records?

Yes, secure user record CRUD is just a part of Databunker. When saving records in Databunker, it extracts user email, phone, login identity, and custom identity, building a secure hash-based index for quick user record lookup.

Additionally, Databunker provides:
* Secure session storage API
* Temporary shareable identities API
* Automatic record expiration and removal
* Compliance with pseudonymization
* DPO management tool
* User-accessible UI
* And many more features

## How do I search for all orders from a user named John?

Databunker supports customer record lookup by login name, email address, phone number, or token value. If you have one of these values, you can fetch customer orders from the orders table.

## How do I back up the Databunker database?

If you are using MySQL as the Databunker backend database, you can use the standard mysqldump command.

For SQLite, Databunker has a special API call to dump the internal database. You can run the following command to dump the database in SQL format:

```
curl -s http://localhost:3000/v1/sys/backup -H "X-Bunker-Token: $TOKEN" -o backup.sql
```

## What is the difference between different tokenization solutions and Databunker?

Most commercial tokenization solutions tokenize specific records, such as customer name or email, without linking them to a comprehensive customer record. In contrast, Databunker tokenizes the entire customer record with all details, offering additional capabilities. This allows the end customer (natural person or data subject) to log into their profile, update personal records, manage consents, or request data deletion. Furthermore, we provide numerous APIs to assist with GDPR compliance.

## What is considered PII or what information is recommended to store in Databunker?

The following is a partial list:

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


## What technology stack is used in the program?

We use **Go** (**go-lang**) ito build the entire project, with 80% automatic test coverage. The open-source version comes with an internal database (**SQLite**) or an external database (**MySQL**/**PostgreSQL**), and a Web UI, all packaged as one executable file for easy deployment.

## Does the product support encryption in motion and encryption in storage?
Yes. For encryption in motion, make sure to set up HTTPS SSL certificates. To meet encryption in storage requirements, Databunker encrypts all customer personal information or securely hashes it before storing it in the databases.

All customer records are encrypted with a 32-byte key comprising a System Master key (24 bytes, stored in memory, not on disk) and a customer record key (8 bytes, stored on disk). The System Master key is kept in RAM and is never stored on disk. The enterprise version supports Master key split.

## Does Databunker is a wrapper for an existing database?

Databunker is not a wrapper for an existing database. It is a purpose-built application service designed to encrypt and store personal records in a privacy-compliant manner. The service offers a REST API for storing and updating user records in JSON format, along with a customer-facing web UI that provides visibility into the customer’s personal data.
