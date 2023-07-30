---
#title: Securely Sharing Data with 3rd Party Services Using Open-Source Databunker
#title: Temporary record identity for 3rd party services
title: How to use temporary record identities for secure data exchange
weight: 5
widget: textblock
---
One of the myths of the GDPR is that it prevents **data sharing**. This isn’t true. The GDPR aims to ensure that there is trust and confidence in how organisations use personal data and ensure that organisations share data securely and fairly.

When sharing data with 3rd party services, such as web analytics, logging, or intelligence platforms, organizations often need to disclose customer identifiers like original IP addresses or email addresses. However, it is essential to minimize the transmission of **personally identifiable information (PII)** to these external systems.

{{% alert note %}}
**Do not share your customer user name, IP, emails, etc... because they look nice in reports!**
{{% /alert %}}

#### GDPR Compliance: The Need for Adequate and Limited Data Sharing
The GDPR mandates that *personal data should be adequate, relevant, and **limited to what is necessary** for the purposes for which they are processed.* Ensuring compliance with this requirement is crucial when sharing data with external parties.

#### Introducing Databunker: The Swiss Army Knife for Secure Data Storage
We wanted to simplify the way organizations can share data in a secure way. This is one of the reasons we built **Databunker**. [Databunker](https://databunker.org/) is an open-source Swiss army knife tool designed to securely store personal records and PII/PHI.

#### Empowering Secure Data Sharing with Temporary Identity Tokens
Databunker enables organizations to generate **time-limited, temporary, and shareable identity tokens** for use with 3rd party services. These identity tokens serve as record identifiers, linking back to the customer's personal record, app record, or specific session.

#### Optional Additional Information for Enhanced Tracking
Databunker also allows the incorporation of optional additional information, such as partner name identity, to enable effective tracking of record usage.

#### Ensuring Controlled Access for Partner Organizations
With Databunker, partners can retrieve specific customer information for a limited time and designated fields only. After the specified period, access is automatically blocked, reinforcing data security and compliance.

<center class="mt-5"><img src="featured.png" /></center>
