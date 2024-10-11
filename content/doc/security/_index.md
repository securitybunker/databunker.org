---
title: Databunker security review
linktitle: Databunker security review
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: doc
# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 38
---

Information security's primary focus is the balanced protection of **confidentiality**, **integrity**, and **availability** of data. We will review **Databunker** and **Databunker Pro** security features based on these characteristics.

**Databunker** and **Databunker Pro** are built to follow privacy-by-design principles. These principles are an integrated part of the **GDPR**, **CPRA**, **SOC2** privacy section. **Databunker** allows you to build **privacy by design** compliant solutions, and to follow data minimization requirements. When using **Databunker**, every API request generates an audit trail. **Databunker** can be used as a **consent management system** and as a **repository for processing operations**. It serves as an external storage according to pseudonymization definition and complies with Schrems II cross-border personal data transfer implementation.

**Databunker Pro** serves as a full featured DPO portal. This version comes with built-in connectors for popular cloud SaaS and Databases vendors: HubSpot, MailChimp, Salesforce, MySQL, PostgreSQL, Oracle, SQL Server and many more. Personal data reports generated now with a click of a mouse.


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
By default **Databunker Pro** connects with PostgreSQL using a secure **SSL channel**.

### Secure session storage
Some of the information stored by the application session is considered **Personally Identifiable Information** or, so called, **PII**. For example a user email address, IP address, browser details, etc… **Databunker** has an API for secure storage of session objects inside Databunker’s encrypted store.

### Dumping all records at once
By default, Databunker does not allow to enumerate user records. This API call is disabled by default. This is done on purpose to prevent the attackers from getting all the records at once.

### Shamir key sharing algorithm 
**Databunker** service uses a **master key** to encrypt all records. **Databunker Pro** offers an even more secure solution by using a **wrapping key** to encrypt the master key itself. You can use an API to renew and rotate the wrapping keys. A backup copy of the wrapping key is split into several parts using the Shamir key sharing algorithm. These shares can be used to recover the wrapping key if it is lost or compromised.

### Optional user scheme
**Databunker** supports user scheme validation and enforcement for user records with some advanced extensions. **Dataunker** can return an error message when trying to create a user object with missing fields defined in the user scheme.

## How we address integrity

### Record update
When storing user profiles, **Databunker** employs encrypted JSON objects. When a user object is encrypted and serialized after the update, **Databunker** performs an ``UPDATE`` SQL query. In theory 2 **Databunker** or more processes can update the same user record in the database. To prevent the system from inconsistencies, **Databunker** ensures the original record presence in the database when it creates an SQL update query. In practice, the product is checking the **md5** of the previous record when running SQL ``UPDATE`` queries.

### Multi-tenancy
**Databunker Pro** multi-tenancy is implemented using the **PostgreSQL** built-in a **row-level security mechanism**. When a SQL query is executed by a specific tenant, this query can only see records that belong to it. More detailed information can be found here:

* https://aws.amazon.com/blogs/database/multi-tenant-data-isolation-with-postgresql-row-level-security/

### Token-based API Access
Each API request received by **Databunker** must have a user token and a tenant name in **Databunker Pro**. Based on this token value **Databunker** identifies a user role, checks user permissions and blocks unauthorized API requests. All those operations are performed in the scope of the user tenant in **Databunker Pro**.


## How we address availability

### Containers
**Databunker** and **Databunker Pro** are distributed as Docker containers that you can easily spawn in your cloud environment. We supply example scripts to run **Databunker** and **Databunker Pro** containers using **docker-compose** and using **kubernetes**.

### Stateless application server
**Databunker** is a stateless application server. You can have tens of **Databunker** servers running in your cloud. The service bottleneck is a backend database. To address this challenge, in AWS, **Databunker Pro** works with the AWS Aurora PostgreSQL Auto-Scaling database.

&nbsp;

## 👋 Guided tour
Curious to see **Databunker** or **Databunker Pro** in action?

[Book a call today 🚀](/api/meeting.php?a=tour)

<div class="next-steps">
<p>Next steps</p>
<ul>
<li><a href="/doc/demo/">Databunker online demo</a></li>
<li><a href="/doc/benchmark/">Benchmark results</a></li>
<li><a href="/doc/migration/">Database Migration</a></li>
<li><a href="https://github.com/securitybunker/databunker/">Source code</a></li>
</ul></div>
