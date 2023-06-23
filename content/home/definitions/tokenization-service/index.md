---
title: Tokenization service
page_type: "definition"
active: false
weight: 10
---
**Tokenization** is the process of turning sensitive data into nonsensitive data called "**tokens**" that can be used in a database or internal system.

The most known tokenization use-case is the tokenization of credit card numbers.

In a classical tokenization service, only one value is turned into a token. For example, if you have a user email address, social security number, and a credit card you will have 3 tokens. One token is for email, one for SSN, and one for credit card.

![Databunker digram](/img/diagram.png)

Unlike classical tokenization services, **Databunker** gets the whole user object and generates a **random user token**. User JSON objects are encrypted and stored in a backend database by Databunker. Databunker builds a secure and quick search index to lookup user records for example by email address. Search index values are securely hashed. As a result, no personal data is saved in clear text in the Databunker backend database.
