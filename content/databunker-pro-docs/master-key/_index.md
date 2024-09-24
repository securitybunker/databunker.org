---
title: Master Key in Databunker Pro
linktitle: Master Key
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: pro
weight: 30
---
The Master Key is a critical component of Databunker Pro's security architecture. It serves as the primary encryption key for protecting sensitive data stored within the system.

<a href="javascript:void(0);" onclick="request_free_trial();">&gt;&gt; Request free trial</a>

## Key Points:

* The Master Key is automatically generated during the initial setup of Databunker Pro.
* Unlike the open-source version, the Master Key is never exposed in the Pro Version.
* The Master Key is encrypted using a Wrapping Key, adding an extra layer of security.

## Enhanced Security in Pro Version:

In Databunker Pro, the Master Key's security is significantly strengthened compared to the open-source version:

1. **No Exposure:** The Master Key is never revealed or accessible to users or administrators, reducing the risk of key compromise.
1. **Wrapping Key Protection:** The Master Key is encrypted using a Wrapping Key. This means that even if an attacker gains access to the encrypted Master Key, they cannot use it without the Wrapping Key.
1. **Separation of Concerns:** By using a Wrapping Key to encrypt the Master Key, Databunker Pro implements a separation of concerns. This allows for more flexible key management and enhances overall security.
1. **Key Rotation Support:** The use of a Wrapping Key facilitates easier and more secure key rotation processes, allowing for regular updates to the encryption without exposing the Master Key.
1. **Recovery Mechanism:** In case of Wrapping Key loss, the Shamir Key Shares provide a secure way to recover and re-encrypt the Master Key without ever exposing it.

By implementing these additional security measures, Databunker Pro ensures that the Master Key remains secure throughout its lifecycle, significantly reducing the risk of unauthorized access to sensitive data.


## What's next?
- [Installation guide](/databunker-pro-docs/installation-guide/)
- [Wrapping Key Rotation](/databunker-pro-docs/wrapping-key/)
- [Shamir Keys](/databunker-pro-docs/shamir-keys/)
- [Multi-tenancy](/databunker-pro-docs/tenant-api/)
- [Tokenization API](/databunker-pro-docs/tokenization/)
