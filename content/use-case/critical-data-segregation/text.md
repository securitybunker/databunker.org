---
#title: Data security with critical data segregation
title: "Cybercrime Survival Guide: Implementing Critical Data Segregation to Outsmart Attackers"
summary: Minimize business risks using critical data segregation with Databunker.
weight: 5
widget: textblock
---
In this article we will discuss what is critical data segregation and how to use open-source tools to protect your corporate secrets.

## What is critical data segregation?
**Critical data segregation** is the practice of separating sensitive or critical data from other less sensitive data within a system or organization. The goal is to enhance security and minimize the risk of unauthorized access or compromise of the critical information.

Here are some key points to understand about critical data segregation:
1. Data Classification
1. Separation of Data
1. Access Controls
1. Encryption
1. Monitoring and Auditing
1. Backup and Disaster Recovery
1. Compliance and Regulations

## How it is applied to Databunker?
Databunker is an open-source project that provides a one-stop-shop solution to implement **critical data segregation** for your organization. Databunker will be used to store your customer personal records in secure and compliant way. It can be used to store:
* **Personally Identifiable Information** (**PII**)
* **Personal Health Information** (**PHI**)
* **Know Your Customer** (**KYC**) records
* **Payment Card Industry** (**PCI**) data

It is an open-source product and provides a one-stop-shop solution to implement **critical data segregation** for your organization. Databunker will be used to store your customer personal records in secure and compliant way.

By storing customer personal data in the Databunker, you are effectively minimizing the impact of an attack from your existing database, thereby minimizing business risk factors.

Suppose, the bad actor finds an **SQL injection** in your web app. The cybercriminal might be able to dump all your records. He will will not be able to get access to your customer's personal data as this information is stored outside of your existing database (in Databunker).

In addition to storing user profiles, you can use Databunker can store additional user information separately from the personal profile. For example, you can store shipping information separately from a user profile. You have an API to retrieve this extra data without returning user personal records (name, email, phone, etc...).

<center class="mt-5"><img src="featured.png" /></center>
