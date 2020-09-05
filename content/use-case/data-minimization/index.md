---
title: Data minimization and GDPR Scope reduction
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

One of the security design principles is scope reduction and data minimization. By storing customer personal data in the Databunker, you basically minimize the attack outcome from your existing database, thus minimizing the business risk factors.

Suppose, the bad actor finds an **SQL injection** in your web app database. He might get access to some data. This data will not be personal as this information is stored outside of your existing database (in Databunker).

When you clean up your databases from personal records (PII) and use the Datbunker token instead, you are basically doing **data minimization** and **GDPR scope reduction**.
