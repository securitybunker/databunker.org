---
title: Temporary record identity for 3rd party services
summary: Temporary records can refference user profile, user app record or user session record.
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


When sharing data with 3rd party services like web analytics, logging, intelligence, etc... sometimes we need to
share customer id, for example, customer original IP address or email address. All these pieces of information
are considred customer identifiable information and must be minimized when sending to 3rd paty systems.

***Do not share your customer user name, IP, emails, etc... because they look nice in reports!***

According to GDPR: *The personal data should be adequate, relevant and **limited to what is necessary** for the
purposes for which they are processed.*

Our system can generate you time-limited, temporary, shareable identity token that you can share with 3rd
parties as a record identity. This identity, can link back to the customer personal record or customer app record
or to specific customer session.

Optionally, Data Bunker can incorporate partner name in identity so, you track this identity usage.

Your partner can retrieve this information and only specific fields during this specific timeframe.
Afterward, access will be blocked.
