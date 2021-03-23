---
title: "Secure session storage"
page_type: "definition"
active: false
weight: 100
---
When creating web applications sometimes you need to save data in a session object. This data can include user email address, user permissions, last operation code, error messages. A **session** can be defined as server-side storage of information that is desired to persist throughout the user’s interaction with the website or web application.

Some of the information stored in the **session** is considered **Personally Identifiable Information**. In short, **PII**, as defined by **GDPR**.

GDPR stands on a number of principles. **Integrity and confidentiality** are some of them. These principles tell that **appropriate security measures** should be in place to protect personal data.

Databunker has an API for secure storage on **session objects** inside Databunker's encrypted store. Node.js modules and examples provided:

https://databunker.org/use-case/secure-session-storage/
