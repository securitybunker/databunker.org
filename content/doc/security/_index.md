---
title: Databunker and Databunker PRO Security Review
linktitle: Databunker security review
toc: false
type: docs
date: "2019-05-05T00:00:00+01:00"
draft: false
mymenu: doc
# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 38
---

Information security's primary focus is the balanced protection of **confidentiality**, **integrity**, and **availability** of data. We will review **Databunker** and **Databunker PRO** security features based on these characteristics.

**Databunker** and **Databunker PRO** are built to follow privacy-by-design principles. These principles are an integrated part of the **GDPR**, **CPRA**, **SOC2** privacy section. **Databunker** tools include encryption and pseudonymization of personal data. They allow you to build **privacy by design** compliant solutions, to follow data minimization requirements and to execute data subject requests. When using **Databunker**, every API request generates an audit trail. **Databunker** can be used as a **consent management system** and as a **repository for processing operations**. It serves as an external storage according to pseudonymization definition and complies with Schrems II cross-border personal data transfer implementation.

**Databunker PRO** serves as a full featured DPO portal. This version comes with built-in connectors for popular cloud SaaS and Databases vendors: HubSpot, MailChimp, Salesforce, MySQL, PostgreSQL, Oracle, SQL Server and many more. Personal data reports generated now with a click of a mouse.


## How we address confidentiality

### Encryption in motion and encryption is storage
By default, **Databunker** is configured with full encryption in motion and encryption in storage. To comply with encryption in motion **Databunker** is enforcing SSL encryption protocols for all network requests.

### Record encryption
All records with customer personal information are encrypted using **AES-256** keys or securely hashed in the internal database used by **Databunker**.

### Encryption of audit events
PII records in the audit events are fully encrypted.

### Secure hash-based search index
**Databunker** knows how to extract email, phone, login name from user records and to build a hashed-based search index on this basis. Using this method allows easy and secure lookup of original user records.

### Backend database connectivity
By default **Databunker PRO** connects with PostgreSQL using a secure **SSL channel**.

### Secure session storage
Some of the information stored by the application session is considered **Personally Identifiable Information** or, so called, **PII**. For example a user email address, IP address, browser details, etc… **Databunker** has an API for secure storage of session objects inside Databunker’s encrypted store.

### Dumping all records at once
By default, Databunker does not allow to enumerate user records. This API call is disabled by default. This is done on purpose to prevent the attackers from getting all the records at once.

### Shamir key sharing algorithm 
**Databunker** service gets the **master key** used to encrypt all records from a **Docker secrets store**. **Databunker PRO** provides an even more secure solution. The master key can be optionally split into 3 pieces when 2 pieces are required for the process to start. We have implemented **Shamir’s key sharing algorithm** for better security.

### Optional user scheme
**Databunker** supports user scheme validation and enforcement for user records with some advanced extensions. **Dataunker** can return an error message when trying to create a user object with missing fields defined in the user scheme.


## How we address integrity

### Record update
When storing user profiles, **Databunker** employs encrypted JSON objects. When a user object is encrypted and serialized after the update, **Databunker** performs an ``UPDATE`` SQL query. In theory 2 **Databunker** or more processes can update the same user record in the database. To prevent the system from inconsistencies, **Databunker** ensures the original record presence in the database when it creates an SQL update query. In practice, the product is checking the **md5** of the previous record when running SQL ``UPDATE`` queries.

### Multi-tenancy
**Databunker PRO** multi-tenancy is implemented using the **PostgreSQL** built-in a **row-level security mechanism**. When a SQL query is executed by a specific tenant, this query can only see records that belong to it. More detailed information can be found here:

* https://aws.amazon.com/blogs/database/multi-tenant-data-isolation-with-postgresql-row-level-security/

### Token-based API Access
Each API request received by **Databunker** must have a user token and a tenant name in **Databunker PRO**. Based on this token value **Databunker** identifies a user role, checks user permissions and blocks unauthorized API requests. All those operations are performed in the scope of the user tenant in **Databunker PRO**.


## How we address availability

### Containers
**Databunker** and **Databunker PRO** are distributed as Docker containers that you can easily spawn in your cloud environment. We supply example scripts to run **Databunker** and **Databunker PRO** containers using **docker-compose** and using **kubernetes**.

### Stateless application server
**Databunker** is a stateless application server. You can have tens of **Databunker** servers running in your cloud. The service bottleneck is a backend database. To address this challenge, in AWS, **Databunker PRO** works with the AWS Aurora PostgreSQL Auto-Scaling database.

## Any questions?

**In case you have any questions about Databunker and Databunker PRO implementation, please feel free to contact us at hello@privacybunker.io.**

**We appreciate any feedback on our products.**

**We encourage you to try our open source product out free of charge.**

**To install the Databunker PRO version, please schedule a meeting through Calendly.**

* https://calendly.com/stremovsky/30min
