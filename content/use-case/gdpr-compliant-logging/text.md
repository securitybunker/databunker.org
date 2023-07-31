---
title: How to implement logging without breaking GDPR Compliance
weight: 5
widget: textblock
---
When it comes to handling **Personal Identifiable Information (PII)**, identifying strong and weak user identifiers becomes essential. **Strong identifiers** include usernames or email addresses, while **weak identifiers** consist of IP addresses, browser user agents, cookies, or session IDs. **Combining weak identifiers can create a strong user identifier, raising privacy concerns.**

If your company serves European customers, GDPR compliance is non-negotiable, irrespective of your location.

Saving log events must be done carefully to ensure **GDPR compliance**. Simply storing customer IP addresses, browser user agents, or cookie IDs in web server or cloud logs may render your system non-compliant unless specific measures are taken.

### You can take several steps to make your logging GDPR compliant:
1. **Use Short Log Retention Policy:** Implement an automatic log retention policy, removing log events older than a few weeks or up to one month, minimizing data storage and privacy risks.
1. **Encrypt Strong and Weak Identifiers:** Before saving any personal records in logs, ensure all strong and weak identifiers are encrypted, protecting sensitive information.
1. **Use Databunker Session Tokens:** Databunker offers a unique session token to be saved in server log files. This special token allows you to access session information without an additional password for a limited time, typically up to one month.

### Unlocking the Power of Databunker Session Token:
Databunker presents a specialized session token designed to enhance your logging practices. With Databunker's additional API, access session information is made convenient and secure without the need for an extra password, maintaining privacy standards.

- https://databunker.org/use-case/temporary-record-identity/


## Additional info

For an in-depth review of different methods to make your logs GDPR compliant take a look at the following article:

- https://www.freecodecamp.org/news/how-to-stay-gdpr-compliant-with-access-logs/

