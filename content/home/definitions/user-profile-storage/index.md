---
title: "User profiles storage"
page_type: "definition"
active: false
weight: 30
---

**Databunker** is a special encrypted database for sensitive personal records or **Personally Identifiable Information** (**PII**) in terms of **GDPR**.

Upon an **API request** to create a new user record, Databunker performs the following operations:

- Request sanity check and access validation check.
- Normalize email address, phone number, login name.
- Strict **user schema** validation if the schema is defined in the configuration. Generate an error if some fields are missing or error.
- Securely encode email address, phone number, login name.
- Check for duplicate email, phone, and login records. Generate an error in case of duplicates found.
- Random generation of a **user UUID token** to be used as the main user index.
- Encrypt the whole user JSON and save it in the backend database (MySQL, PostgreSQL, SQLite).
- Return user token (UUID generated before) to the API caller.

Now, when Databunker returns a **user token**, you can store it in your existing database instead of storing personal records in clear text (PII).

This **customer token** is basically a user **pseudonymised identity**.

![Pseudonymized identity](/img/pseudonymized-identity.png)

Afterward, you can query the Databunker service using the **user token** to receive user personal data, saving the audit trail. You can also perform user record lookup using the **email address**, **login name**, or **phone number**.
