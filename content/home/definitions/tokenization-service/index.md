---
title: Tokenization service
page_type: "definition"
active: false
weight: 10
---
By using **Databunker**, developers can benefit from a built-in tokenization service that securely encrypts and stores sensitive user records (PII/PHI/KYC/PCI records) while providing efficient search capabilities without compromising personal data privacy.

**Tokenization** is the process of transforms sensitive data into nonsensitive data called "**tokens**", which can be used in databases or internal systems.

A common use-case of tokenization involves the tokenization of credit card numbers, where the original credit card number is replaced with a token that no longer holds identifiable information.

In traditional tokenization services, each individual value is tokenized separately. For instance, if you have a user's email address, social security number, and credit card details, you would generate three separate tokens: one for the email, one for SSN, and one for the credit card.

![Databunker digram](/img/diagram.png)

Databunker, however, takes a unique approach to tokenization. Rather than tokenizing individual values, it processes the entire user object as a JSON structure and generates a random user token in UUID format. This token is then sent back to the calling party, which can store it in the regular database or logs as a user identity. Using Databunker's API, developers can easily retrieve or update user details using this token.

**Databunker Pro** provides a standard <a href="/databunker-pro-docs/tokenization/">format-preserving tokanization</a> able to process millions of records.

