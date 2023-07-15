---
title: Tokenization service
page_type: "definition"
active: false
weight: 10
---
By using **Databunker**, developers can benefit from a comprehensive tokenization solution that securely encrypts and stores user data while providing efficient search capabilities without compromising personal data privacy.

**Tokenization** is the process of transforms sensitive data into nonsensitive data called "**tokens**" that can be used in databases or internal systems.

A common use-case of tokenization involves the tokenization of credit card numbers, where the original credit card number is replaced with a token that no longer holds identifiable information.

In traditional tokenization services, each individual value is tokenized separately. For instance, if you have a user's email address, social security number, and credit card details, you would generate three separate tokens: one for email, one for SSN, and one for the credit card.

![Databunker digram](/img/diagram.png)

However, Databunker takes a unique approach to tokenization. Instead of tokenizing individual values, it processes the entire user object and generates a random user token. Databunker then encrypts the user JSON objects and securely stores them in a backend database. Databunker creates a secure hash-based search index for quick lookup of users based on email, token, phone number, or login name. This ensures that no personal data is stored in clear text within the Databunker backend database.
