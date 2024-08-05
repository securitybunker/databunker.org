---
#title: Getting Started with Databunker
title: "What is Databunker?"
linktitle: Getting started
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: doc
# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 1
---
## Product brief

Databunker is a special secure storage system designed to store and protect **Personally Identifiable Information (PII)**, **Protected Health Information (PHI)**, **Payment Card Industry (PII)**, and **Know Your Customer (KYC)** records. It was built to prevent sensitive data exposure through **SQL injection** and **unfiltered GraphQL queries**, offering superior protection compared to standard database encryption provided by major database or cloud vendors. Additionally, the product is fully compliant with GDPR regulations.

Databunker is a fully open-source project available under the commercially friendly **MIT license**.

### The hidden risks of traditional database encryption

From security perspective conventional database encryption often provides only a **false sense of security**. Data is usually encrypted solely at the storage or disk level. In the event of **SQL injection** or **incorrectly filtered GraphQL queries**, malicious actors can effortlessly access your data in plain text.

### Solution with Databunker
Databunker offers a paradigm shift in customer data protection:
1. By default, bulk retrieval of user records is disabled, providing an additional layer of defense against potential breaches.
2. Your backend communicates with Databunker through API calls, akin to NoSQL database practices, rather than relying on traditional SQL queries.
3. To access user records, partial user information such as an email address coupled with an access token is required. Additionally, users can be looked up by their phone number, login name, or unique user ID (UUID token).
4. Secure hash-based indexing is utilized for all search indexes by default, further fortifying data protection measures.
5. Databunker ensures that no information is stored in clear text, enhancing overall security.

![Pseudonymized identity](/img/pseudonymized-identity.png)

## What's next?
- [Getting started guide](/doc/start/)
- [Detailed installation guide](/doc/install/)
