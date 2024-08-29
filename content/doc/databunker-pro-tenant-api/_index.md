---
title: Multi-tenancy in Databunker Pro
linktitle: Multi-tenancy in Databunker Pro
toc: false
type: docs
date: "2024-05-05T00:00:00+01:00"
draft: false
mymenu: doc
weight: 30
---
Databunker Pro supports multi-tenancy, allowing you to manage multiple tenants within a single instance. This document outlines the API endpoints for creating, managing, and interacting with tenants.

## Create Tenant

Creates a new tenant in the Databunker Pro system.

### Endpoint

```
curl -H 'X-Bunker-Token: ROOT-ACCESS-TOKEN' -X POST /v1/tenant
```

### Request Body

| Field | Type | Description |
|-------|------|-------------|
| name  | string | The name of the tenant. Must match the format: [a-z0-9]+ |
| org   | string | The organization slug associated with the tenant |

### Example Request

```json
{
  "name": "tenant-name",
  "org": "orgslug"
}
```

### Response

| Field  | Type | Description |
|--------|------|-------------|
| status | string | Operation status ("ok" if successful) |
| xtoken | string | Tenant access token in UUID format |

### Example Response

```json
{
  "status": "ok",
  "xtoken": "TENANT-ACCESS-TOKEN"
}
```

### Notes

- The `TENANT-ACCESS-TOKEN` is in UUID format.
- This token can be used to read or modify records stored under this tenant account.

## Rename Tenant

Renames an existing tenant.

### Endpoint

```
curl -H 'X-Bunker-Token: TENANT-ACCESS-TOKEN' -X PUT https://old-tenant.databunker-domain.com/v1/tenant
```

### Request Body

| Field | Type | Description |
|-------|------|-------------|
| name  | string | The new name for the tenant. Must match the format: [a-z0-9]+ |

### Example Request

```json
{
  "name": "new-name"
}
```

### Response

| Field  | Type | Description |
|--------|------|-------------|
| status | string | Operation status ("ok" if successful) |

### Example Response

```json
{
  "status": "ok"
}
```

## Create User Account

Creates a new user account under a specific tenant.

### Endpoint

```
curl -H 'X-Bunker-Token: TENANT-ACCESS-TOKEN' -X POST https://tenant-name.databunker-domain.com/v1/user
```

### Notes

- Replace `tenant-name` in the URL with the actual name of the tenant.
- The request body and response format for this endpoint are not provided in the given information. Typically, they would include user details such as name, email, etc., and return a user ID or status.

Other commands:
For a full list of API requests, check out the <a href="https://documenter.getpostman.com/view/11310294/Szmcbz32">API document</a>.

## General Notes

1. **Tenant Name Format**: Tenant names must follow the format `[a-z0-9]+`. This means they can only contain lowercase letters and numbers.

2. **Tenant-Specific URLs**: After creating a tenant, you'll interact with tenant-specific endpoints using URLs in the format `https://tenant-name.databunker-domain.com/...`.

3. **Authentication**: Most endpoints will require the `TENANT-ACCESS-TOKEN` for authentication. Include this token in the `X-Bunker-Token` header or as specified in the Databunker Pro documentation.

4. **Error Handling**: While not explicitly shown in the examples, the API should return appropriate error messages and HTTP status codes for invalid requests or server errors.

5. **Rate Limiting**: Be aware of any rate limiting policies that may be in place to prevent abuse of the API.

6. **SSL/TLS**: Always use HTTPS for secure communication with the API endpoints.

For more detailed information on request/response formats, additional endpoints, or error handling, please refer to the complete Databunker Pro API documentation.
