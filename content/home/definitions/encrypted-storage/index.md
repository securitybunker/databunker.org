---
title: "Encrypted data storage"
#title: "Encrypted PII storage"
page_type: "definition"
active: false
weight: 5
#1. [Temporary record identity](/use-case/temporary-record-identity/)
#1. [Critical data segregation](/use-case/critical-data-segregation/)
#1. [Secure session storage](/use-case/secure-session-storage/)
#1. [Data minimization](/use-case/data-minimization/)
#1. [DPO Management Portal](/use-case/dpo-management-portal/)
#1. [Privacy portal for customers](/use-case/privacy-portal-for-customers/)
#1. [Privacy by design and by default](/use-case/privacy-by-design-default/)
#1. [Personal data pseudonymization](/use-case/pseudonymization-vs-anonymization/)
#1. [Consent management platform](/use-case/consent-management-platform/)
#1. [Privacy enhancing technology](/use-case/privacy-enhancing-technology/)
#1. [User Request Workflow](/use-case/gdpr-user-request-workflow/)
#1. [User rights and privacy controls](/use-case/user-privacy-controls/)
#1. [GDPR compliant logging](/use-case/gdpr-compliant-logging/)
#1. [Simplify user login backend](/use-case/simplify-user-login-backend/)
#1. [Generating an Audit Trail](/use-case/trace-profile-access-change/)
#1. [Customer profile storage and tokenization](/use-case/customer-profile-storage-tokenization/)
---

**Databunker** is a powerful encrypted vault specifically designed for developers to protect sensitive records. You can use it to store:
* **Personally Identifiable Information** (**PII**)
* **Personal Health Information** (**PHI**)
* **Know Your Customer** (**KYC**) records
* **Payment Card Industry** (**PCI**) data

In today's cybercriminal landscape, **data breaches** pose a significant threat.

Developers can rely on Databunker's robust security measures, built with a strong emphasis on **security by design** and **privacy by design** principles. It effectively safeguards against **SQL injections** and **unfiltered GraphQL requests**, significantly reducing the risk of exposing sensitive records.

The API is developer-friendly, so you can easily store and retrieve encrypted user records, just like working with a NoSQL database. In addition, Databunker creates a quick search index using hashed data, so you can quickly find user records based on email, token, phone number, or login name.

By default, Databunker takes a proactive approach to security by disabling the API call that allows dumping all user records at once. This crucial measure mitigates the potential for attackers to extract all sensitive data in a single attempt. It provides an additional layer of security to the system.

![Pseudonymized identity](/img/pseudonymized-identity.png)

Additional resources:

1. [A perfect KYC backend for a crypto startup](/success-story/kyc-backend-for-crypto-startup/)
