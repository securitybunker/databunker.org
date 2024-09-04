---
title: Wrapping Key Rotation
linktitle: Wrapping Key Rotation
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: doc
weight: 30
---
Wrapping Key Rotation is a crucial security practice in Databunker Pro that helps maintain the confidentiality and integrity of the encrypted data over time.

<a href="javascript:void(0);" onclick="request_free_trial();">&gt;&gt; Request free trial</a>

## What is the Wrapping Key?

The Wrapping Key is a cryptographic key used to encrypt the Master Key in Databunker Pro. It acts as an additional layer of protection for the Master Key

## Importance of Key Rotation:
1. **Limiting Key Exposure:** Regular rotation reduces the window of opportunity for potential attackers to compromise the key.
1. **Compliance:** Many security standards and regulations require periodic key rotation.
1. **Mitigating Long-term Attacks:** Rotation helps protect against slow, persistent attempts to break encryption.


## Best Practices:

* Rotate the Wrapping Key at regular intervals (e.g., every 90 days or annually).
* Implement automated reminders for key rotation.
* Maintain a secure log of key rotations for audit purposes.
* Test the rotation process regularly to ensure smooth execution when needed.

## Recovery:
In case the current Wrapping Key is lost or compromised, Databunker Pro allows for recovery using Shamir Key Shares. This ensures that the Master Key can be safely re-encrypted with a new Wrapping Key without exposure.
