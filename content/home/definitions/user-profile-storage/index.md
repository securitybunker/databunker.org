---
title: "Encrypted PII/PHI/PCI/KYC storage"
page_type: "definition"
active: false
weight: 5
---

**Databunker** is a special encrypted database for sensitive personal records, **Personally Identifiable Information** (**PII**), **Personal Health Information** (**PHI**), **Know Your Customer** (**KYC**) records, and **PCI** records. 

**Data breaches** are a widespread problem today, especially in a thriving cybercriminal landscape.

Organizations that fall victim to a data breach may mitigate GDPR fines by implementing data protection measures such as **encryption**.

Databunker was built to prevent sensitive records exposure via **SQL injection** and **unfiltered GraphQL requests**. Databunker stores encrypted user records.

Instead of talking to Databunker using SQL, your backend will have to call an API function to retrieve specific user details. It is similar to any NoSQL database API. You can only lookup user records if you know his **email address**, **phone number** or **unique token id**.

By default, Databunker does not allow user records enumeration. This API call is disabled by default. Databunker encrypts customer records and builds a secure search index for quick user lookup (i.e. using email, token, etc…).

![Pseudonymized identity](/img/pseudonymized-identity.png)
