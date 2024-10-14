---
title: Getting started with Databunker
#title: "Databunker: Quick Start"
#title: "Databunker: Get Started Now"
linktitle: Getting started
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: doc
# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 5
#1. **Accountability priciple (Article 5(2)):** By providing this self-service portal, organizations demonstrate their commitment to GDPR principles. All user actions in the portal can be logged, contributing to the demonstration of compliance.
---
## Databunker Overview
Databunker is a specialized system for secure storage, data tokenization, and consent management, designed to protect PII, PHI, PCI, and KYC records.

[>> Why choose Databunker? What are the risks of traditional database security solutions?](/doc/introduction/)


## Step 1: Starting the Databunker container
The easiest way to start using Databunker is by running it as a Docker container. Once the container is running, Databunker opens port 3000 and listens for incoming requests.

To launch Databunker with a ``DEMO`` root access key, ideal for local testing and development, use the following command:

```
docker run -p 3000:3000 -d --rm --name databunker securitybunker/databunker demo
```

For detailed installation instructions, please refer to the [full installation guide](/doc/install/).

## Step 2: Creating a User Record

Databunker's most popular API request is to store user records. For each new user record, Databunker generates and returns a **user token** in UUID format.

GDPR Relevance:
* Under **GDPR**, this **user token** is referred to as a **pseudonymized identity**. This token can be safely stored in your regular database or logs, as long as **no** additional personal information is stored with it.
* **Pseudonymization** reduces the risk of directly associating personal data with an individual, reinforcing data protection and privacy principles.
* For instance, when you receive a **Right to be forgotten (RTBF) request**, you can remove the personal data from Databunker without affecting other systems.

Use this command to create the user record:

```
curl -s http://localhost:3000/v1/user \
  -X POST -H "X-Bunker-Token: DEMO" \
  -H "Content-Type: application/json" \
  -d '{"first":"John","last":"Doe","login":"john","phone":"4444","email":"user@gmail.com"}'
```

Output:
```
{"status":"ok","token":"eeb04dd7-ecb2-c957-2875-5b98897b21a6"}
```

## Step 3: Retrieving user record

You can retrieve user records using indexed fields, such as **email address**, **login name**, **user token**, or **custom index**.

To fetch customer records by user token, use this command:
```
curl -s -H "X-Bunker-Token: DEMO" -X GET http://localhost:3000/v1/user/token/eeb04dd7-ecb2-c957-2875-5b98897b21a6
```

You can integrate Databunker into your application's sign-in logic and search for customer records using an email address or login name:

```
curl -s -H "X-Bunker-Token: DEMO" -X GET http://localhost:3000/v1/user/email/user@gmail.com
curl -s -H "X-Bunker-Token: DEMO" -X GET http://localhost:3000/v1/user/login/john
```

## Full lists of API requests:

For a full list of available requests, please check the [API documentation](https://documenter.getpostman.com/view/11310294/Szmcbz32).

## Step 4: Accessing the Web UI

Databunker includes a built-in web UI. For quick access, we’ve pre-installed Databunker, which you can access at: <a href="https://demo.databunker.org/" target="_blank">demo.databunker.org</a>. Use the ``DEMO`` root token to access the admin panel.

If you deploy Databunker using Docker, this interface is available by default at: <a href="http://localhost:3000/" target="_blank">localhost:3000</a>. In the demo version, the root token is set to  ``DEMO`` by default.

The **admin** or **Data Protection Officer (DPO)** can use the web interface to:
1. Delete user records to comply with GDPR RTBF "forget me" requests
1. Generate personal data reports and review audit logs
1. Manage personal data processing activities

#### End-User Access:

Databunker's optional customer portal lets users securely access, manage, and update their personal data, supporting GDPR compliance. Key features include secure login, data review, and audit log access. If you created a sample user with the phone number ``4444``, as shown in the **Creating a User Record** section, you can use ``4444`` as both the phone number and password to access the customer portal.


## Step 5: View Node.js code examples
1. Passwordless Login with Databunker: [GitHub Repository](https://github.com/securitybunker/databunker-nodejs-passwordless-login)

2. Node.js Example with Passport.js, Magic.Link, and Databunker: [GitHub Repository](https://github.com/securitybunker/databunker-nodejs-example)

3. Secure Session Storage for Node.js Apps: [Detailed Guide](https://databunker.org/use-case/secure-session-storage/#databunker-support-for-nodejs)

#### Node.js modules

1. `@databunker/store` from https://github.com/securitybunker/databunker-store

2. `@databunker/session-store` from https://github.com/securitybunker/databunker-session-store

<div class="next-steps">
<p>Next steps</p>
<ul>
<li><a href="/doc/install/">Detailed installation guide</a></li>
<li><a href="/doc/demo/">Databunker online demo</a></li>
<li><a href="/doc/benchmark/">Benchmark results</a></li>
<li><a href="https://github.com/securitybunker/databunker/">Source code</a></li>
</ul></div>
