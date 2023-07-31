---
title: "Schrems II Compliance with Open-Source Databunker"
weight: 5
widget: textblock
---
On July 16, the Court of Justice of the European Union issued its long-awaited decision in the case Data Protection Commission v. Facebook Ireland, Schrems. That decision **invalidates** the European Commission's adequacy decision for the EU-U.S. **Privacy Shield Framework**, on which more than 5,000 U.S. companies rely to conduct trans-Atlantic trade in compliance with EU data protection rules.

## Why Schrems-II compliance so important?
**Data exporters** are liable to personal data when performing a cross-border transfer. Data exporters need to implement supplemental technical measures to prevent governmental authorities from identifying individuals pertaining to the data in the target countries.

One of the important consequences is that you no longer can save customer data in the cloud without proper handling.

According to GDPR Article 32: ``the controller and the processor shall implement appropriate technical and organizational measures to ensure a level of security appropriate to the risk`` including ``the pseudonymization and encryption of personal data``.

![Customer data pii in the cloud](/img/no-pii.png)


## So, what should I do now?
On November 10, the **European Data Protection Board** (**EDPB**) released its "Recommendations 01/2020 on measures that supplement transfer tools to ensure compliance with the EU level of protection of personal data"
([link](https://edpb.europa.eu/sites/edpb/files/consultation/edpb_recommendations_202001_supplementarymeasurestransferstools_en.pdf)).

One of the alternative methods is to get customer consent for personal data cross-border transfer. This is known as **standard contractual clauses (SCC)**.

## So, how Databunker can help with Schrems II Compliance?
Before talking about the exact solution, I need to brief you about few topics.

### Definition of pseudonymization.

***‘pseudonymization’ means the processing of personal data in such a manner that the personal data can no longer be attributed to a specific data subject without the use of additional information, provided that such additional information is kept separately and is subject to technical and organizational measures to ensure that the personal data are not attributed to an identified or identifiable natural person…***

### Transfer of pseudonymized data
**EDPB** permits the transfer of pseudonymized  data. This snippet is from the **EDPB document**.

Use Case 2: Transfer of pseudonymized Data

80.
A data exporter first pseudonymizes data it holds, and then transfers it to a third country for analysis, e.g., for purposes of research.
If
1. a data exporter transfers personal data processed in such a manner that the personal data can no longer be attributed to a specific data subject, nor be used to single out the data subject in a larger group, without the use of additional information,
2. that additional information is held exclusively by the data exporter and kept separately in a Member State or in a third country, territory or one or more specified sectors within a third country, or at an international organization for which the Commission has established in accordance with Article 45 GDPR that an adequate level of protection is ensured,
3. disclosure or unauthorized use of that additional information is prevented by appropriate technical and organizational safeguards, it is ensured that the data exporter retains sole control of the algorithm or repository that enables re-identification using the additional information, and 
4. the controller has established by means of a thorough analysis of the data in question taking into account any information that the public authorities of the recipient country may possess that the pseudonymized personal data cannot be attributed to an identified or identifiable natural person even if cross-referenced with such information, 

then the EDPB considers that the **pseudonymization performed provides an effective supplementary measure**.


## Ok, great how it helps me?
When saving a user object in Databunker you are getting a **user token**. This user token is a user **pseudonymized identity**.

![Pseudonymized identity](/img/pseudonymized-identity.png)


So, now when performing a cross-border transfer, change user personal data with a Databunker user token. This way you **make the user not identifiable by the target government** and it is compatible with **Schrems II**.

