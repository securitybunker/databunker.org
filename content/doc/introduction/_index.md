---
#title: Getting Started with Databunker
#title: "What is Databunker?"
#title: "Databunker: Redefining Database Security"
title: "Why choose Databunker"
linktitle: Getting started
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: doc
# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 1
---
⚠️ Here is a simple truth: <b>traditional database encryption often provides a false sense of security</b>.

What are the risks of traditional database security solutions?

* **Data encryption is not enough:** Most cloud and security vendors provide only data or disk encryption
* **Unfiltered GraphQL Queries:** Attackers can retrieve unencrypted data via incorrectly filtered queries
* **SQL Injection Attacks:** Cybercriminals can easily access plain text data through SQL injection

#### Introducing Databunker

Databunker is a specialized system for secure storage, data tokenization, and consent management, designed to protect:
* Personally Identifiable Information (PII)
* Protected Health Information (PHI)
* Payment Card Industry (PCI) data
* Know Your Customer (KYC) records

#### Key Features:
* **Open-Source:** Fully available under the commercially friendly MIT license
* **GDPR Compliant:** Built with privacy regulations in mind
* **Superior Protection:** Goes beyond standard database encryption offered by major vendors

#### How Databunker Reinvents Data Security:
Databunker introduces a new approach to customer data protection:
1. **Secure Indexing:** Utilizes hash-based indexing for all search indexes
1. **No Clear Text Storage:** Ensures all information is encrypted, enhancing overall security
1. **Restricted Bulk Retrieval:** Bulk retrieval is disabled by default, adding an extra layer of defense
1. **API-Based Communication:** Backend interacts with Databunker through API calls, similar to NoSQL solutions
1. **Record Token:** Databunker creates a secured version of your data object - an object UUID token that is safe to use in your database

Don't let your sensitive data become the next breach headline

![Pseudonymized identity](/img/pseudonymized-identity.png)

<div class="next-steps">
<p>Next steps</p>
<ul>
<li><a href="/doc/start/">Getting started guide</a></li>
<li><a href="/doc/install/">Detailed installation guide</a></li>
<li><a href="/doc/demo/">Databunker online demo</a></li>
<li><a href="/doc/benchmark/">Benchmark results</a></li>
</ul></div>
