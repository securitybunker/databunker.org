---
title: Schrems II compliance
summary: How to perform customer data cross-border transfers with Databunker.
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

# Enable math on this page?
math: true
---

On July 16, the Court of Justice of the European Union issued its long-awaited decision in the case Data Protection Commission v. Facebook Ireland, Schrems. That decision **invalidates** the European Commission's adequacy decision for the EU-U.S. **Privacy Shield Framework**, on which more than 5,000 U.S. companies rely to conduct trans-Atlantic trade in compliance with EU data protection rules.

## Why Schrems-II so important?
**Data exporters** are liable to personal data when performing a cross-border transfer. Data exporters need to implement supplemental technical measures to prevent governmental authorities from identifying individuals pertaining to the data in the target countries.

## So, what should I do now?
On November 10, the **European Data Protection Board** (**EDPB**) released its "Recommendations 01/2020 on measures that supplement transfer tools to ensure compliance with the EU level of protection of personal data"
([link](https://edpb.europa.eu/sites/edpb/files/consultation/edpb_recommendations_202001_supplementarymeasurestransferstools_en.pdf)).

## So, How Databunker can help?
Before talking about exact solution, I need to brief you about few things.

### What is pseudonymisation?

***‘pseudonymisation’ means the processing of personal data in such a manner that the personal data can no longer be attributed to a specific data subject without the use of additional information, provided that such additional information is kept separately and is subject to technical and organisational measures to ensure that the personal data are not attributed to an identified or identifiable natural person…***

### Transfer of pseudonymised data
**EDPB** permits the transfer of pseudonymised  data. This snippet is from the **EDPB document**.

Use Case 2: Transfer of pseudonymised Data

80.
A data exporter first pseudonymises data it holds, and then transfers it to a third country for analysis, e.g., for purposes of research.
If
1. a data exporter transfers personal data processed in such a manner that the personal data can no longer be attributed to a specific data subject, nor be used to single out the data subject in a larger group, without the use of additional information,
2. that additional information is held exclusively by the data exporter and kept separately in a Member State or in a third country, territory or one or more specified sectors within a third country, or at an international organisation for which the Commission has established in accordance with Article 45 GDPR that an adequate level of protection is ensured,
3. disclosure or unauthorised use of that additional information is prevented by appropriate technical and organisational safeguards, it is ensured that the data exporter retains sole control of the algorithm or repository that enables re-identification using the additional information, and 
4. the controller has established by means of a thorough analysis of the data in question taking into account any information that the public authorities of the recipient country may possess that the pseudonymised personal data cannot be attributed to an identified or identifiable natural person even if cross-referenced with such information, 

then the EDPB considers that the **pseudonymisation performed provides an effective supplementary measure**.


## Ok, great how it helps me?
When saving a user object in Databunker you are getting a **user token**. This user token is a user **pseudonymised identity**.

So, now when performing a cross-border transfer, change user personal data with a Databunker user token. This way you **make the user not identifiable by the target government**.

