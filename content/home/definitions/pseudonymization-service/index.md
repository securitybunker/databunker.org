---
title: "Pseudonymization service"
page_type: "definition"
active: false
weight: 15
---
According to **GDPR Article 32**:
>The controller and the processor shall implement appropriate technical and organizational measures to ensure a level of security appropriate to the risk including the **pseudonymization** and **encryption** of personal data.

GDPR defines pseudonymization as:
>‘pseudonymization’ means the processing of personal data in such a manner that the personal data can no longer be attributed to a specific data subject without the use of additional information, provided that such additional information is kept **separately** and is subject to technical and organizational measures to ensure that the personal data are not attributed to an identified or identifiable natural person.

Databunker complies with the definition of pseudonymization. User personal data is encrypted and stored separately from the application database.

When saving a user object in Databunker you are getting a **user token**. This user token is a user **pseudonymised identity**.

![Pseudonymized identity](/img/pseudonymized-identity.png)

So, now when performing a **cross-border transfer** or **saving application logs**, change user identity (email, name, etc...) with a Databunker **user token**.

This way you make the **user not identifiable directly**. This method is [**compatible with Schrems II**](https://databunker.org/use-case/schrems-ii-compliance/).
