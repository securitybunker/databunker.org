---
title: "Data Segregation"
page_type: "definition"
active: false
weight: 20
---

**Critical data segregation** is the practice of separating sensitive or critical data from other less sensitive data within a system or organization. The goal is to enhance security and minimize the risk of unauthorized access or compromise of the critical information.

**Databunker** provides a one-stop-shop solution to implement critical data segregation for your organization. Databunker can be used to store customer personal records in secure and compliant way.

* **Personally Identifiable Information** (**PII**)
* **Personal Health Information** (**PHI**)
* **Know Your Customer** (**KYC**) records
* **Payment Card Industry** (**PCI**) data

In today’s cybercriminal landscape, **data breaches** pose a significant threat.

Developers can rely on Databunker's robust security measures, built with a strong emphasis on security by design and privacy by design principles. It effectively safeguards against **SQL injections** and **unfiltered GraphQL requests**, significantly reducing the risk of exposing sensitive records.

With Databunker's user-friendly API, developers can easily store and retrieve encrypted user records, similar to working with a NoSQL database. In addition, Databunker creates a secure hash-based search index for quick user record lookup using email address, token id, phone number, or login name.

By default, Databunker takes a proactive approach to security by disabling the API call that allows dumping all user records at once. This crucial measure mitigates the potential for attackers to extract all sensitive data in a single attempt. It provides an additional layer of security to the system.

In case you built a web app on top of Databunker and you have an SQL injection - customer personal data remains safe within Databunker, isolated from the main database. This isolation prevents unauthorized access to sensitive information, safeguarding user privacy.

![Pseudonymized identity](/img/pseudonymized-identity.png)

Additional resources:
1. [Temporary record identity](/use-case/temporary-record-identity/)
1. [Critical data segregation](/use-case/critical-data-segregation/)
1. [Secure session storage](/use-case/secure-session-storage/)
1. [Data minimization](/use-case/data-minimization/)
1. [Privacy portal for customers](/use-case/privacy-portal-for-customers/)
1. [Privacy by design and by default](/use-case/privacy-by-design-default/)
