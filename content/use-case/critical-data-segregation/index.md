---
title: Critical data segregation
summary: Improve your solution overall security level by adding critical data segregation.
abstract: ""
weight: 15
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
---

{{% alert note %}}
Click on the **Slides** button above to view the built-in slides feature.
{{% /alert %}}

One of the software design principles is **critical data segregation**. By storing customer personal data in the Databunker, you basically minimize the attack outcome from your existing database, thus minimizing the business risk factors.

Suppose, the bad actor finds an **SQL injection** in your web app database. He might get access to some data. This data will not be personal as this information is stored outside of your existing database (in Databunker).

In addition, Databunker can store user data separately from personal records. For example, you can store shipping information separately from a user profile. You have an API to retrieve this additional data without returning user personal records (name, email, phone, etc...).
