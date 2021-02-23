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

One of the important trends of modern software development is adherance to the **privacy by design** and **privacy by default** principles.

**Privacy by design** stands that organizations should consider data protection issues as part of the design and implementation of systems, services, products, and business practices.

The GDPR requires you to integrate **data protection** concerns into every aspect of your processing activities. This approach is **data protection by design and by default**.

In this article, we’ll be taking an in-depth look at the **privacy by design** principle and how to achieved it with simple steps.

I will talk about an open-source product our team develops called **Databunker** and how it can help. Databunker is a **Swiss army knife tool** for **storing personal records or PII**.

**Databunker** from the initial project design was built as a secure storage of personal records and to comply with GDPR regulations.


## Privacy By Design Actionable Plan

The following is a partial list of action items to make your solution **privacy by design** compliant.

### 1. Create a map personal data flows and processing operations

The company with GDPR, you should map every moment of the personal data lifecycle. The company must know what happens to personal data, why and if any external parties are involved. You need to identify all 3rd party services that have even access to the personal data including access to partial data.

Ensure that any data processor your company is using also implements appropriate technical and organisational measures for personal data security.

### 2. Identify lawful basis for processing of personal data.

You need to have a legal basis **before** processing personal data. For example in can be in a form of concent. Cookie popup is one example. Another alternative is to update privacy policy, terms of service or a company contract.

Consult with the lawers before.

### 3. Update privacy policy and terms of service documents.

With your privacy policy you need to address the following:
1. Make sure your customer knows what 3rd party companies you are using to process personal data. For example what CRM service you use.
1. You need to help you customers with execution of their user rights. You need to provice an active email address to send all user requests.
1. If you need to do cross-border personal data transfer, you can detailed it here.

Consult with the lawers before.

### 4. Minimize personal data

You need to minimize personal data your business collects. A general rule for you is to keep personal data at minimal only required to perform the business and remove all unused data. This is **data minimization** and **storage limitation** GDPR principles. 

One of the results of this rule is that you need to remove personal data for expired trial customers of customers that left the company service.

**Databunker** can be used for secure personal data storage. Follow this article for aditional information: https://databunker.org/use-case/data-minimization/

## 5. Best practice of personal data encryption and encryption of app session data.

GDPR stands on **integrity and confidentiality** as a leading principles. These principles tell that appropriate security measures should be in place to protect the personal data.

Although there are **no explicit GDPR encryption requirements**, the regulation does require you to enforce security measures and safeguards. The GDPR repeatedly highlights **encryption** and **pseudonymization** as “**appropriate technical and organizational measures**” of personal data security.

**Databunker** stores your customer personal data in encrypted manner and builts a secure index to search for personal records. In addition Databunker supports (session data encryption and storage)[https://databunker.org/use-case/secure-session-storage/].

1. Personal data pseudonymisation - data can not attributed to specific data subject.
1. Data confidentiality, integrity and availability.
1. You must have appropriate security to prevent the personal data you hold being accidentally or deliberately compromised.
1. Remove old of expired accounts - data minimization.
1. Keep track of any operations with PII.
1. Make sure legal basis is in place when processing personal data.
1. Cookie popup.
1. Use encrypted session storage.
1. Make sure you logging is GDPR compliant.
1. Audit sensitive operations - accountability principles.

For EU companies - make sure user knows that his data might be processed by USA companies before processing (terms of service / contract / consent).
Also physical and organisational security measures.

It is a key element of the GDPR’s risk-based approach and its focus on accountability, i.e. your ability to demonstrate how you are complying with its requirements.



## How this can help you?

You can easily turn your service or product to be **privacy by design** compliant if you will use Databunker in the backend of your product or service and continue to adhere to [personal data minimization](https://databunker.org/use-case/data-minimization/) and [avoid PII in logs](https://databunker.org/use-case/gdpr-compliant-logging/).
