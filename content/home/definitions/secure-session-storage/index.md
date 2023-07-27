---
title: "Secure session storage"
page_type: "definition"
active: false
weight: 15
---
In the ever-evolving landscape of web applications, securing user data is paramount. One critical aspect is the storage of **session data**, which includes vital information like user email addresses, permissions, and error messages.

A session acts as a server-side storage solution that persists throughout a user's interaction with the website or web application. However, with some of this data being classified as **Personally Identifiable Information (PII)** or **Personal Health Information (PHI)**, ensuring its protection becomes a top priority.

If your company serves European customers, GDPR compliance is non-negotiable, irrespective of your location. GDPR emphasizes key principles, such as **integrity** and **confidentiality**, which require the implementation of appropriate security measures to safeguard personal data.

We wanted to simplify the way developers can use session data in a secure way. This is one of the reasons we built Databunker. Databunker provides a special API that enables developers to store session objects securely within an encrypted data store.

Our team has built Node.js modules and examples to simplify integration with Databunker built-in session storage API.

![Pseudonymized identity](/img/pseudonymized-identity.png)

Additional resources:
1. [Temporary record identity](/use-case/temporary-record-identity/)
1. [Critical data segregation](/use-case/critical-data-segregation/)
1. [Secure session storage](/use-case/secure-session-storage/)
1. [Data minimization](/use-case/data-minimization/)
1. [Privacy portal for customers](/use-case/privacy-portal-for-customers/)
1. [Privacy by design and by default](/use-case/privacy-by-design-default/)
