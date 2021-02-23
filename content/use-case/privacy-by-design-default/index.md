---
title: Privacy by design
summary: Data protection by design is about considering data protection and privacy issues upfront in everything you do.
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

One of the software and security design principles is **privacy by design** and **privacy by default**.

**Privacy by design** stands that organizations should consider data protection issues as part of the design and implementation of systems, services, products, and business practices.

The GDPR requires you to integrate **data protection** concerns into every aspect of your processing activities. This approach is **data protection by design and by default**.

In this article, we’ll be taking an in-depth look at the **privacy by design** principle and how to achieved it with simple steps.

Then I will talk about an open-source product our team develops called **Databunker** and how it can help. Databunker is a **Swiss army knife tool** for **storing personal records or PII**.

# Privacy By Design Actionable Plan

The following is a partial list of action items to make your business **privacy by design** compliant.

## 1. Create a map personal data flows and processing operations

The company should map every moment of the personal data lifecycle. The company must know what happens to personal data, why and if any external parties are used.
You need to identify all 3rd party services that have even access to the personal data including access to partial data.

## 2. Identify lawful basis for processing of personal data.

You need to have a legal basis **before** processing personal data. For example in can be in a form of concent. Cookie popup si one example. Another alternative is to update privacy policy, terms of service or a company contract. Consult with the lawers before.

## 2. Update privacy policy and terms of service documents.

With your privacy policy you need to address the following:
1. Make sure your customer knows what 3rd party companies you are using to process personal data. For example what CRM service you use.
1. You need to help you customers with execution of their user rights. You need to provice an active email address to send all user requests.
1. If you need to do cross-border personal data transfer, you can detailed it here.

Consult with the lawers before.

## 3. Minimize personal data

You need to minimize what personal data your business collects and how it is processed. A general rule for you is to keep personal data at minimal only required to perform the business and remove all unused data. This is **data minimization** and **storage limitation** GDPR principles. 

One of the results of this rule is that you need to remove personal data for expired trial customers of customers that left the company service.

**Databunker** can be used for secure personal data storage.

## 4. Best practice: personal data encryption or hashing.

1. Personal data pseudonymisation - data can not attributed to specific data subject.
1. Data confidentiality, integrity and availability.
1. You must have appropriate security to prevent the personal data you hold being accidentally or deliberately compromised.
1. Data minimisation.
1. Remove old of expired accounts - data minimization.
1. Keep track of any operations with PII.
1. Make sure legal basis is in place when processing personal data.
1. Cookie popup.
1. Use encrypted session storage.
1. Make sure you logging is GDPR compliant.
1. Audit sensitive operations - accountability principles.

For EU companies - make sure user knows that his data might be processed by USA companies before processing (terms of service / contract / consent).
Also physical and organisational security measures.
Ensure that any data processor a company is using also implements appropriate technical and organisational measures for data security.

It is a key element of the GDPR’s risk-based approach and its focus on accountability, i.e. your ability to demonstrate how you are complying with its requirements.

Databunker from the initial project design was built as secure storage of personal records and comply with GDPR regulations.

## How this can help you?

You can easily turn your service or product to be **privacy by design** compliant if you will use Databunker in the backend of your product or service and continue to adhere to [personal data minimization](https://databunker.org/use-case/data-minimization/) and [avoid PII in logs](https://databunker.org/use-case/gdpr-compliant-logging/).
