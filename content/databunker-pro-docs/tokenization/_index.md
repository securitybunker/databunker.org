---
title: Format-Preserving Tokenization
linktitle: Format-Preserving Tokenization
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: pro
weight: 30
---
Databunker Pro can serve as a format-preserving tokenization service, meeting strict privacy requirements isuch as **GDPR data minimization**. It is architected to handle millions of records efficiently through data partitioning. The following data types can be tokenized:
* Uint64/Unint32 integers
* Unix timestamp records
* Credit card numners
* Text strings

When an API request is made to tokenize a record, Databunker generates two random tokens: one in UUID format and another as a format-preserving token.

For example, when tokenizing a **credit card**, Databunker Pro generates a random token in credit card format that passes the Luhn credit card check.

If tokenizing a **text** value, only a UUID-format token is generated.

#### Additional Tokenization Features (Supporting GDPR Data Minimization Requirements):

* **Unique record support:** When the same value is tokenized, the same token value will be generated. This is optional, and you can enable it by specifying the **unique** boolean value when calling the tokenization API.
* **Optional record expiration:** You can specify how long a tokenized record should be retained. If the record is unused during this period, it will be automatically removed. Once the record is retrieved, the expiration period is extended.

For more information, please contact us.

<a href="javascript:void(0);" onclick="request_free_trial();">&gt;&gt; Request free trial</a>

## What's next?
- [Installation guide](/databunker-pro-docs/installation-guide/)
- [Master Key Architecture](/databunker-pro-docs/master-key/)
- [Wrapping Key Rotation](/databunker-pro-docs/wrapping-key/)
- [Shamir Keys](/databunker-pro-docs/shamir-keys/)
- [Multi-tenancy](/databunker-pro-docs/tenant-api/)
