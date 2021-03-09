---
title: Tokenization service
page_type: "definition"
active: false
weight: 10
---
**Tokenization** is the process of turning sensitive data into nonsensitive data called "**tokens**" that can be used in a database or internal system.

The most known tokenization service is the tokenization of credit card numbers.

In classical tokenization service, only one value is turned into a token. For example, if you have a user email address, social security number, and a credit card you will have 3 tokens. One token for email, one for SSN, and one for a credit card.

![Databunker digram](/img/diagram.png)

Unlike classical tokenization service, Databunker gets the whole user profile and generate **user token** for it. Databunker stored user profile in encrypted format and builts a secure and quick search index to find user record for example by email address. This search index is also hashed on the disk so, no personal data is saved in clear text in the Databunker. User profile in JSON structure is stored as encrypted binary value in the backend database.
