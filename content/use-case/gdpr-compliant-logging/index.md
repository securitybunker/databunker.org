---
title: GDPR compliant logging
summary: Databunker can generate a session token to be used in server logs.
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

When talking about Personal Identifiable Information (PII) we are talking about strong and weak user identifiers. A strong identity for example is a username or email address. Weak identity is an IP address, browser user agent, cookie, or session id. A combination of weak identifiers gives us a strong user identifier.

So, you can not simply save the customer IP address, browser user agent, or cookie id in the webserver log, unless you have a strong retention policy and you delete logs on a weekly or monthly bases.

Another solution might be to encrypt all strong and week identities in the log files.

An alternative solution is to use Databunker to generate a special session token to save in the server logs files. Databunker provides you an API to retrieve session info out of Databunker without an additional password for a limited time. For example one month.
