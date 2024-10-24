---
title: Format-Preserving Tokenization
linktitle: Format-Preserving Tokenization
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: pro
weight: 30
---

## What Problems Does It Solve?

1. **Data Privacy & Compliance**
- ✅ Meets GDPR data minimization requirements
- ✅ Protects sensitive data while maintaining format
- ✅ Ensures regulatory compliance without sacrificing functionality
- ✅ Reduces scope of PCI DSS compliance

2. **Enterprise Scalability**
- ✅ Handles millions of records through data partitioning
- ✅ Provides high-performance tokenization operations
- ✅ Supports multiple data formats and types
- ✅ Enables efficient data processing at scale

3. **Format Compatibility**
- ✅ Preserves data format for legacy system compatibility
- ✅ Maintains data validation rules (e.g., Luhn algorithm for credit cards)
- ✅ Enables analytics while protecting actual data
- ✅ Supports seamless integration with existing workflows

## 🔄 Supported Data Types

| Data Type | Format Preservation | Token Format |
|-----------|-------------------|--------------|
| Credit Card Numbers | ✅ (with Luhn check) | Format-preserving + UUID |
| Uint64/Uint32 integers | ✅ | Format-preserving + UUID |
| Unix timestamp records | ✅ | Format-preserving + UUID |
| Text strings | ❌ | UUID only |

## 🛠️ Key Features

### Dual Token Generation
```
// Example response for credit card tokenization
{
  "uuid": "550e8400-e29b-41d4-a716-446655440000",
  "token": "4532015112830366"  // Format-preserving token
}
```

### Smart Record Management
- **Unique Record Support**
```
// Same input generates same token when enabled
{
    "value": "4532015112830366",
    "unique": true
}
```

- **Automatic Expiration**
```
// Set expiration for tokenized records
{
    "value": "4532015112830366",
    "expiration": "30d"  // 30 days
}
```
## 💡 Advanced Capabilities

1. **Intelligent Token Generation**
- UUID format tokens for universal compatibility
- Format-preserving tokens for legacy system support
- Luhn algorithm validation for credit card tokens

2. **Record Lifecycle Management**
- Optional unique token generation
- Configurable record expiration
- Automatic cleanup of expired records
- Expiration extension on record access

3. **Enterprise Features**
- High-performance architecture
- Data partitioning for scalability
- Multiple token format support
- Flexible API integration

## 📊 Use Cases

1. **Financial Services**
- Credit card number tokenization
- Account number protection
- Transaction ID management

2. **Healthcare**
- Patient ID tokenization
- Record number protection
- Temporal data management

3. **Enterprise Applications**
- User ID tokenization
- Timestamp tokenization
- Reference number protection

## 🚀 Getting Started

```
# Example API call for tokenization
curl -X POST https://databunker.pro/api/v1/tokenize \
  -H "Authorization: Bearer YOUR_TOKEN" \
  -d '{
    "value": "4532015112830366",
    "unique": true,
    "expiration": "30d"
  }'
```

## 📈 Benefits

- **Compliance**: Built-in GDPR data minimization
- **Security**: Protected sensitive data storage
- **Compatibility**: Format preservation for legacy systems
- **Scalability**: Enterprise-grade performance
- **Flexibility**: Multiple token format support

---

🔍 <a href="javascript:void(0);" onclick="request_free_trial();">Request free trial</a> | 📧 [Contact Sales](https://databunker.org/contact/)


## What's next?
- [Installation guide](/databunker-pro-docs/installation-guide/)
- [Master Key Architecture](/databunker-pro-docs/master-key/)
- [Wrapping Key Rotation](/databunker-pro-docs/wrapping-key/)
- [Shamir Keys](/databunker-pro-docs/shamir-keys/)
- [Multi-tenancy](/databunker-pro-docs/tenant-api/)
