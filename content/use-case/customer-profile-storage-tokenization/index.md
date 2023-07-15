---
title: Customer profile storage and tokenization
summary: Databunker provides built-in support for PII tokenization and storage.
abstract: ""
weight: 50
authors: []
tags: []
type: docs
mymenu: usecase
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

Databunker is basically a special encrypted database for sensitive personal records or **Personally Identifiable Information** (**PII**).

Upon an API request to create a new user, request parameters provide customer details in HTML POST key/value format or as JSON format, Databunker performs the following operations:

- Request sanity check and access token check.
- Normalize email address, phone number, login name.
- Strict user schema checks if the schema is defined in configuration and returns an error if some fields are missing or error.
- Encrypt email address, phone number, login name.
- Validate for duplicate records using encrypted keys (email, phone, login) and return a duplicate user error message.
- Generate a record UUID to be used as a user token.
- Encrypt the whole user record and save it in backend database already encrypted (MySQL, PostgreSQL, SQLite)
- Return user token (UUID generated previously) to your backend service.

Now, when Databunker returns your a **user token**, you can use it with your existing database instead of storing personal records or (PII).

This **customer token** is basically a user **pseudonymised identity**.

![Pseudonymized identity](/img/pseudonymized-identity.png)

Afterword, you can query the Databunker service using **user token** to receive personal information, saving the audit trail. You can also perform user lookup using email address, login name, or phone number. Databunker automatically extracts these values from the user profile and builds a secure hash-based search index.
