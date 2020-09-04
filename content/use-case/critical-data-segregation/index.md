---
title: Critical data segregation
summary: Improve your solution overall security level by adding critical data segregation.
abstract: ""
weight: 15

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


One of the software design principles is critical data segregation. By storing customer personal data int the Databunker, you basically minimize the attack outcome from your existing database, thus minimizing the business risk factors. Suppose, the bad actor will find an SQL injection in your web app database, and he will be able to get access to some data. This data will not be personal as this information is stored outside of your existing database (in Databunker).

In addition, Databunker itself can store user data separately from personal records. In Databunker you can save personal profile and store additional app data in additional tables. Databunker provides you a way to store your app customer information in a specific type of record for that. So, you can retrieve only your app's customer personal information. For example, you can store customer shipping information in an additional application table.
