---
title: Personal information tokenization and storage
summary: An example talk using academia's Markdown slides feature.
abstract: ""

authors: []
tags: []

# Is this a featured talk? (true/false)
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

Customer information, or PII, received in HTML POST key/value format of or JSON format is serialized, encrypted with a 32 byte key and saved in database. You will get a customer token to use in internal databases. Afterwords, you can query the Data Bunker service to receive personal information, saving audit trail.
