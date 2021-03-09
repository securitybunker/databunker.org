---
title: "Secure session storage"
page_type: "definition"
active: false
weight: 100
---
When writing web applications sometimes you need to save data in a session object. This data can include user email address, user permissions, last operation code, error messages. A session can be defined as a server-side storage of information that is desired to persist throughout the user’s interaction with the web site or web application.

Some of the information stored in **session** is considered Personal Identifiable Information. In short, PII, as defined by GDPR.

GDPR stands on a number of principles. **Integrity and confidentiality** are some of them. These principles tell that **appropriate security measures** should be in place to protect the personal data.

Databunker has an API for secure storage on **session object** inside Databunker' encrypted store. Node.js modules and examples provided: https://databunker.org/use-case/secure-session-storage/
