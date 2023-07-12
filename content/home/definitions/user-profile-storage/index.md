---
title: "Encrypted PII/PHI/PCI/KYC storage"
page_type: "definition"
active: false
weight: 5
---

**Databunker** is a special encrypted vault for sensitive records:
* **Personally Identifiable Information** (**PII**)
* **Personal Health Information** (**PHI**)
* **Know Your Customer** (**KYC**) records
* **Payment Card Industry** (**PCI**) data

**Data breaches** are a widespread problem today, especially in a thriving cybercriminal landscape.

Organizations that fall victim to a data breach may mitigate GDPR fines by implementing data protection measures such as **encryption**.

Databunker was built to prevent sensitive records exposure via **SQL injection** and **unfiltered GraphQL requests**.

Instead of talking to Databunker using SQL, your backend code will have to call an API function to retrieve specific user records. It is similar to any NoSQL database API. You can only lookup user records if you know his **email address**, **phone number**, **login name** or **unique token id**.

By default, Databunker does not allow dumping all user records at once. This API call is disabled. Databunker encrypts customer records and builds a secure search index for quick user lookup (i.e. using email, token, etc...).

![Pseudonymized identity](/img/pseudonymized-identity.png)
