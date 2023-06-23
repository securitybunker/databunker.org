---
title: "Encrypted PII storage"
page_type: "definition"
active: false
weight: 30
---

**Databunker** is a special encrypted database for sensitive personal records and **Personally Identifiable Information** (**PII**).

Since GDPR does not explicitly require **data encryption** to ensure data security, the lack of data encryption is not a violation of GDPR compliance.

However, **data breaches** are a widespread problem, especially in such a thriving cybercriminal landscape.

In light of this, organizations that fall victim to a data breach may potentially mitigate GDPR fines by implementing data protection measures such as **encryption**.

Databunker was built to prevent sensitive records exposure via **SQL injection** and **unfiltered GraphQL queries**. Every user record stored in Databunker is encrypted.

Instead of talking to Databunker using SQL, your backend will have to call an API function to retrieve specific user details. It is similar to any NoSQL database API. You can only lookup user records if you know his **email address**, **phone number** or **unique token id**.

By default, Databunker does not allow user records enumeration. This API call is disabled by default. Databunker encrypts customer records and builds a secure search index for quick user lookup (i.e. using email, token, etc…).

![Pseudonymized identity](/img/pseudonymized-identity.png)
