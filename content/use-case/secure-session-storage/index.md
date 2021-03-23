---
title: Secure Session Storage for Web Apps
summary: Strengthen your web application's overall security by using secure sessions stored in Databunker.
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
---

When creating web applications you need to save data in a **session object**. This data can include user email address, user permissions, last operation code, error messages.

Some of this information is considered **Personal Identifiable Information**. In short, **PII**, as defined by GDPR.

Europeans (and the European Union in particular) care a great deal about online privacy and data protection. International companies marketing to European customers must be GDPR compliant, **regardless of where in the world that business is located**.

In this article, we’ll be taking an in-depth look at the GDPR and how it could affect the storage of user-session information.

Then I will talk about an open-source product I am developing called **Databunker** and how it can help. **Databunker** is a Swiss army knife tool for storing personal records or PII. Databunker will be used for the **Secure Session Storage**.

## What is a session?
A session can be defined as a server-side storage of information that is desired to persist throughout the user's interaction with the web site or web application. 

## GDPR principle of Integrity and confidentiality.
GDPR stands on a number of principles. **Integrity and confidentiality** are some of them. These principles tell that appropriate security measures should be in place to protect the personal data.

## So, do we need to encrypt personal data?
Although there are no explicit **GDPR encryption requirements**, the regulation does **require** you to enforce security measures and safeguards. The **GDPR** repeatedly highlights **encryption** and **pseudonymization** as **"appropriate technical and organizational measures"** of personal data security.

The GDPR requires companies to put in place appropriate technical and organisational measures to implement the data protection principles effectively and safeguard individual rights. This is "**data protection by design and by default**".

In this article I will cover smarter methods to make your session code to be privacy-compliant.

## Introduction to Databunker

But first, let me give you a bit more information about what Databunker is and how it works since we'll be discussing it in some of these methods below.

![Databunker solution](/doc/architecture/databunker-solution.png)

**Databunker** is a GDPR compliant user store service for Web and mobile apps. It works as a backend application service. This product is a combination of several software concepts merged together. It provides secure PII storage and privacy by design out of the box:

1. A Personal Identifiable Information (PII) storage and vault
1. Secure session storage for web applications
1. Privacy portal for customers
1. Application backend server
1. DPO management tool
1. Tokenization service
1. Secret sauce

Project website: https://databunker.org/

## Databunker API

**Databunker** provides an easy to use API for secure session storage. In the backend Databunker encrypts session data and stores it in the regular SQL database (SQLite, MySQL, PostgreSQL). Follow Databunker API for additional information:

https://documenter.getpostman.com/view/11310294/Szmcbz32

## Databunker support for Node.js

Databunker comes with excellent Node.js support. You basically add few dependencies to your project and you are set. Our library does all the magic.

You can use ``@databunker/session-store`` module to automatically use secure storage provided by Databunker.


Here is a working example:

```
const { v4: uuidv4 } = require('uuid');
const app = require('express')();
const session = require('express-session');
const DataBunkerSessionStore = require('@databunker/session-store')(session);

const DataBunkerConf = {
  url: 'http://localhost:3000/',
  token: 'DEMO'
};

const s = session({
  genid: function(req) {
    return uuidv4();
  },
  secret: 'JustASecret',
  resave: false,
  saveUninitialized: true,
  store: new DataBunkerSessionStore(DataBunkerConf)
});

app.use(s);

const port = 3200
const host = '0.0.0.0'

app.get('/', (req, res) => {
  sess=req.session;
  if (!sess.count) {
    sess.count = 1;
  } else {
    sess.count ++;
  }
  res.send('Counter: '+sess.count.toString());
  res.end();
})

app.listen(port, host, () => {
  console.log(`Example app listening at http://${host}:${port}`)
})
```

## Additional examples
1. Node.js example implementing passwordless login using Databunker:
https://github.com/securitybunker/databunker-nodejs-passwordless-login

2. Node.js example with Passport.js, Magic.Link and Databunker:
https://github.com/securitybunker/databunker-nodejs-example

## Summary
With the right architecture, you can make your **session code** to be **privacy by design compliant**. It is not complicated. You can use **Databunker** or roll your own solution.

Whatever you choose is much better than completely ignore this issue and store session data unencrypted.
