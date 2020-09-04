---
title: Simplify user login operations
summary: An example talk using academia's Markdown slides feature.
abstract: ""
weight: 50
authors: []
tags: []
featured: false
image:
  caption: 'Image credit: [**Unsplash**](https://unsplash.com/photos/bzdhc5b3Bxs)'
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

When implementing signup and sign-in in your customer-facing applications, we recommend you to
store all signup records in the Data Bunker database. We support 3 types of indexes, index
by login name, index by email address and index by phone number. So you can easily implement
login logic into your solution with the helpof Databunker API.

Index by email and index by phone allow us to give your customers passwordless access to the
Databunker privacy portal. We send your customer a one-time login code by SMS or email to
give them access to thier account at Data Bunker.
