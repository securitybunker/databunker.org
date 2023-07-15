---
title: "Encrypted storage"
#title: "Encrypted PII storage"
page_type: "definition"
active: false
weight: 5
---

**Databunker** is a powerful encrypted vault specifically designed for developers to protect sensitive records. It was built to store:
* **Personally Identifiable Information** (**PII**)
* **Personal Health Information** (**PHI**)
* **Know Your Customer** (**KYC**) records
* **Payment Card Industry** (**PCI**) data

In today's cybercriminal landscape, **data breaches** pose a significant threat.

Developers can rely on Databunker's robust security measures, built with a strong emphasis on security by design and privacy by design principles. It effectively safeguards against **SQL injections** and **unfiltered GraphQL requests**, significantly reducing the risk of exposing sensitive records.

With Databunker's user-friendly API, developers can easily store and retrieve encrypted user records, similar to working with a NoSQL database. In addition, Databunker creates a secure hash-based search index for quick user record lookup using email address, token id, phone number, or login name.

By default, Databunker takes a proactive approach to security by disabling the API call that allows dumping all user records at once. This crucial measure mitigates the potential for attackers to extract all sensitive data in a single attempt. It provides an additional layer of security to the system.

![Pseudonymized identity](/img/pseudonymized-identity.png)

Additional resources:
1. [Temporary record identity](/use-case/temporary-record-identity/)
1. [Critical Data Segregation](/use-case/critical-data-segregation/)
1. [Secure Session Storage](/use-case/secure-session-storage/)
1. [Data minimization](/use-case/data-minimization/)
1. [Privacy Portal for Customers](/use-case/privacy-portal-for-customers/)

