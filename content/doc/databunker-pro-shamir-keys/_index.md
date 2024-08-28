---
title: Shamir Keys in Databunker Pro
linktitle: Shamir Keys
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: doc
weight: 30
---
Shamir Keys, based on Shamir's Secret Sharing scheme, provide a robust and secure method for backing up and recovering critical encryption keys in Databunker Pro.

## What are Shamir Keys?

Shamir Keys are a set of cryptographic key shares created using Shamir's Secret Sharing algorithm. This method allows a secret (in this case, the Wrapping Key) to be divided into multiple parts.

## Key Features:
1. **Threshold Scheme:** Databunker Pro uses a 3-out-of-5 scheme, meaning any 3 out of the 5 generated key shares can reconstruct the original secret.
1. **Security:** No single key share contains enough information to reconstruct the secret on its own.
1. **Flexibility:** Allows for distributed key storage among trusted parties or locations.

## Use in Databunker Pro:
* During setup, Databunker Pro generates 5 Shamir Key Shares.
* These shares can be used to recover the Wrapping Key if it's lost or compromised.
* The recovered Wrapping Key can then be used to safely re-encrypt the Master Key.


## Best Practices for Managing Shamir Keys:

1. **Secure Storage:** Store each key share in a different secure location.
1. **Access Control:** Limit access to key shares to authorized personnel only.
1. **Regular Audits:** Periodically verify the integrity and availability of all key shares.
1. **Documentation:** Maintain clear, secure documentation on the location and access procedures for each key share.
1. **Disaster Recovery Planning:** Include Shamir Key recovery procedures in your disaster recovery plans.

## Recovery Process:
1. Gather any 3 of the 5 Shamir Key Shares.
1. Use Databunker Pro's built-in recovery tool to reconstruct the Wrapping Key.
1. Generate a new Wrapping Key and use it to start the Databunker Pro process.

By implementing Shamir Keys, Databunker Pro provides a secure and resilient method for key backup and recovery, ensuring that critical encryption keys can be restored even in worst-case scenarios, without compromising the overall security of the system.
