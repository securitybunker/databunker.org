---
title: Simplify user login backend
summary: Databunker can be a perfect solution for the login backend.
abstract: ""
weight: 50
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

When implementing **signup** and **sign-in** in your customer-facing applications, we recommend you to store all user records in the Databunker secure storage.

You can easily implement login logic with Databunker. You can implement the login by yourself or using a **cloud login provider** (Okta, Auth0, OneLogin, etc...). For example, Okta, upon successful login will return your customer email address.

In both cases, you will need to save customer email and other details somewhere and Databunker will be a perfect solution for that.

Databunker APIs support record lookup using one of 4 indexes, index by login name, index by email address, index by phone number, and index by user token. So you can easily implement login logic into your solution and use Databunker for the backend.
