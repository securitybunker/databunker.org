---
title: "PII Tokenization and Secure Storage with Databunker"
weight: 5
widget: textblock
---

## What is PII Tokenization?

Personally Identifiable Information (PII) tokenization is a security technique that replaces sensitive data with unique identification symbols. These symbols, or tokens, retain all the essential information about the data without compromising its security. PII tokenization is crucial for:

- Enhancing data protection
- Reducing the risk of data breaches
- Simplifying compliance with data protection regulations like GDPR

### See How to Implement PII Tokenization with Open-Source Databunker

Databunker is an innovative open-source project that redefines database security, particularly for storing and managing sensitive information like PII, PHI, PCI, and KYC data. Here's how Databunker can help with PII tokenization and secure storage:

- **Comprehensive Tokenization:** Instead of tokenizing individual values, Databunker tokenizes entire user objects, generating a UUID token for each record.
- **Secure Indexing:** Utilizes hash-based indexing for all search indexes, enhancing security.
- **No Clear Text Storage:** Ensures all information is encrypted, minimizing the risk of data exposure.
- **API-Based Interaction:** Backend systems communicate with Databunker through API calls, similar to NoSQL solutions.
- **GDPR Compliance:** Built with privacy regulations in mind, simplifying compliance efforts.
- **Restricted Bulk Retrieval:** Bulk data retrieval is disabled by default, adding an extra layer of protection.

### Getting Started with Databunker

*Starting Databunker in Dev Mode*

To start Databunker for local testing, use the following Docker command:

```
docker run -p 3000:3000 -d --rm --name databunker securitybunker/databunker demo
```

This command starts a local container with a `DEMO` root access key, suitable for development and testing purposes.

### Saving and Retrieving User PII

**Saving User PII**

To save a user record (PII) in Databunker:

```
curl -s http://localhost:3000/v1/user -X POST -H "X-Bunker-Token: DEMO" \
  -H "Content-Type: application/json" \
  -d '{"first":"John","last":"Doe","login":"john","phone":"4444","email":"user@gmail.com"}'
```

This API call returns a user token in UUID format, which can be stored in your regular database as a reference.

**Retrieving User PII**

To retrieve a user record using the token:

```
curl -s -H "X-Bunker-Token: DEMO" -X GET \
  http://localhost:3000/v1/user/token/f8a1b0d2-5e47-11ef-a729-32e05c6f6c16
```

You can also retrieve user records by email, login, or phone number using similar API calls.

### Benefits of Using Databunker for PII Tokenization

- **Enhanced Security:** Goes beyond standard database encryption offered by major vendors.
- **Simplified Compliance:** Built-in features to help meet GDPR and other privacy regulation requirements.
- **Flexible Integration:** Can be easily integrated into existing projects with minimal changes.
- **Open-Source:** Available under the MIT license, allowing for transparency and community contributions.
- **Scalability:** Suitable for both small projects and large-scale applications.

### Conclusion

Databunker offers a robust solution for PII tokenization and secure storage, addressing many of the shortcomings of traditional database security methods. By implementing Databunker in your project, you can significantly enhance your data protection measures, simplify compliance efforts, and reduce the risk of data breaches.
