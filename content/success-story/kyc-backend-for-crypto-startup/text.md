---
title: A perfect KYC backend for my crypto startup
summary: Databunker as a perfect backend for a KYC system for a crypto startup.
weight: 5
widget: textblock
---
## Databunker product feedback

First of all, this product is an excellent idea and thank you for your efforts in developing it!

While I am not located in Europe, the principles of GDPR are important to me and align well with New Zealand's privacy laws. Wherever possible, I need to ensure my customers' personal information is securely stored in New Zealand but to my knowledge, no local service exists and I'm considering self-hosting the DataBunker in a locally operated data center.

I'm developing a cryptocurrency payments processor and need to follow the same identity verification requirements that banks follow, which requires me to store sensitive customer information like passports and driver's licenses and things like utility bills to verify addresses. Obviously, I don't want to store this on my webserver (I'd prefer not to store it at all), so I currently do what you suggested on the Github issue: encrypt immediately, upload to a bucket, and delete the local copy. The bucket is cleared of documents periodically, with records stored securely offline. This makes retrieval difficult (both for myself and for any attacker), but I can see how DataBunker can be used to store "proof of possession" in the form of some unique digital signature.

I don't think I need any help at this time, but I wanted to let you know what drew my attention to DataBunker and how it might help me solve a problem. I hope my review will be valuable for other developers and startup founders like me.

**Elliot Sawyer,**

**Director, Cashware New Zealand, cashware.nz**

<style>
div#free-takeaway {display:none;}
</style>
