---
title: Critical data segregation
summary: Minimize business risks using critical data segregation with Databunker.
abstract: ""
weight: 100
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

Suppose, the bad actor finds an **SQL injection** in your web app. The attacker might get access to the database. The attacker will not be able to get access to your customer's personal data as this information is stored outside of your existing database (in Databunker).

In addition to storing user profiles, you can use Databunker can store additional user information separately from the personal profile. For example, you can store shipping information separately from a user profile. You have an API to retrieve this extra data without returning user personal records (name, email, phone, etc...).
