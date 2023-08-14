---
title: How to implement customer PII storage and tokenization with Databunker
weight: 5
widget: textblock
---
As developers, safeguarding sensitive customer data and Personally Identifiable Information (PII) is a critical responsibility. **Databunker**, an open-source encrypted database, offers a robust solution for securely storing and tokenizing customer profiles. In this comprehensive guide, we will walk you through the steps to implement **customer profile storage and tokenization** with [Databunker](https://databunker.org/), ensuring data security, privacy, and compliance.

### Understanding Databunker:
Databunker is a powerful encrypted vault designed to store sensitive personal records and PII. Its flexible API empowers developers to build privacy-centric applications while comply to strict data protection and privacy standards.

Upon an API request to create a new user, Databunker performs the following operations:

- **Sanity Check and Access Token Verification:** Databunker performs a sanity check on the request and verifies the access token to ensure secure access.
- **Data Normalization:** Databunker normalizes critical customer details like email address, phone number, and login name to ensure consistency and accuracy.
- **User Schema Validation:** If a user schema is defined in the configuration, Databunker strictly validates the incoming data against the schema, identifying any missing or erroneous fields.
- **Data Encryption:** Databunker employs strong encryption to safeguard sensitive data like email address, phone number, and login name.
- **Duplicate Record Check:** Using encrypted keys (email, phone, login), Databunker validates for duplicate user records and returns an error message if any are found.
- **User Token Generation:** Databunker generates a unique UUID as a user token, pseudonymizing the user's identity.
- **Encrypted Storage:** The entire user record, including personal information, is encrypted and securely stored in the backend database (e.g., MySQL, PostgreSQL, SQLite).
- **Customer Token Usage:** Instead of storing personal records or PII, your backend service receives and uses the customer token (UUID) returned by Databunker for future interactions.

### The Power of Customer Tokens:
The customer token acts as a **pseudonymized identity**, providing a secure and privacy-enhancing solution for handling customer data. By using this token with your existing database, you avoid storing sensitive personal records directly, ensuring enhanced data security.

![Pseudonymized identity](/img/pseudonymized-identity.png)

### Retrieving Personal Information and Auditing:
With the user token, you can query the Databunker service to retrieve personal information while maintaining a robust audit trail. 

<center class="mt-5"><img src="featured.png" /></center>
