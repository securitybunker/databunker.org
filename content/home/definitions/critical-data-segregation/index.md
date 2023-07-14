---
title: "Critical Data Segregation"
page_type: "definition"
active: false
weight: 20
---

**Critical data segregation** is the practice of separating sensitive or critical data from other less sensitive data within a system or organization. The goal is to enhance security and minimize the risk of unauthorized access or compromise of the critical information.

**Databunker** provides a one-stop-shop solution to implement critical data segregation for your organization. Databunker will be used to store your customer personal records in secure and compliant way.

* **Personally Identifiable Information** (**PII**)
* **Personal Health Information** (**PHI**)
* **Know Your Customer** (**KYC**) records
* **Payment Card Industry** (**PCI**) data

**Data breaches** are a widespread problem today, especially in a thriving cybercriminal landscape.

Organizations that fall victim to a data breach may mitigate GDPR fines by implementing data protection measures such as **encryption**.

Databunker was built to prevent sensitive records exposure via **SQL injections** and **unfiltered GraphQL requests**.

Instead of talking to Databunker using SQL, your backend code will have to call an API function to retrieve specific user records. It is similar to any NoSQL database API. You can only lookup user records if you know his **email address**, **phone number**, **login name** or **unique token id**.

![Pseudonymized identity](/img/pseudonymized-identity.png)

Additional resources:
1. [Critical Data Segregation](/use-case/critical-data-segregation/)
1. [Secure Session Storage](/use-case/secure-session-storage/)
1. [Data minimization](/use-case/data-minimization/)
