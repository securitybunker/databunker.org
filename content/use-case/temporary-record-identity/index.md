---
title: Temporary record identity for 3rd party services
summary: Temporary record can reference user profile, user app record, or user session record.
abstract: ""
authors: []
tags: []
featured: false
image:
  caption: 'Image'
  focal_point: Right

links:
#- icon: twitter
#  icon_pack: fab
#  name: Follow
#  url: https://twitter.com/georgecushen
url_code: ""
url_pdf: ""
url_slides: ""
url_video: ""

# Projects (optional).
#   Associate this post with one or more of your projects.
#   Simply enter your project's folder or file name without extension.
#   E.g. `projects = ["internal-project"]` references `content/project/deep-learning/index.md`.
#   Otherwise, set `projects = []`.
projects:
# - internal-project

# Enable math on this page?
math: true
---

{{% alert note %}}
Click on the **Slides** button above to view the built-in slides feature.
{{% /alert %}}


One of the myths of the GDPR is that it prevents **data sharing**. This isn’t
true. The GDPR aims to ensure that there is trust and confidence in how
organisations use personal data and ensure that organisations share data
securely and fairly. Databunker knows to address this is a smart way.

When sharing data with 3rd party services like web analytics, logging, intelligence, etc... sometimes we need to
share customer id, for example, customer original IP address or email address. All these pieces of information
are considered as **personally identifiable information (PII)** and it is recommended to minimize when sending to 3rd party systems.

***Do not share your customer user name, IP, emails, etc... because they look nice in reports!***

According to GDPR: *Personal data should be adequate, relevant, and **limited to what is necessary** for the
purposes for which they are processed.*

Databunker can generate you **time-limited, temporary, shareable identity token** that you can share with 3rd
parties as a record identity. This identity can link back to the customer personal record or customer app record
or to specific customer session.

Databunker can optionally incorporate additional information for example partner name identity, so, you track this record usage.

Your partner can retrieve your customer information (only specific fields during a limited time).
Afterward, access will be blocked.
