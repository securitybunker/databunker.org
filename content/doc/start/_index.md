---
title: Getting Started with Databunker
linktitle: Getting Started with Databunker
toc: true
type: docs
date: "2019-05-05T00:00:00+01:00"
draft: false
menu:
  start:
    name: Getting Started
    weight: 1

# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 1
---
The easiest way to get started with **Databunker** is to run it as a **Docker container**:

```
docker run -p 3000:3000 -d --rm --name dbunker paranoidguy/databunker demo
```

This command starts a local container with a `DEMO` root access key. You can use it for the development of testing. For a production installation, follow this [installation guide](https://databunker.org/doc/install/).

### Connecting to Databunker

You can interact with Databunker using:

- [Web Console](https://demo.databunker.org/) listening on port `3000`: [localhost:3000](http://localhost:3000)
- [REST API](https://documenter.getpostman.com/view/11310294/Szmcbz32) listening on port `3000`: [localhost:3000](http://localhost:3000)


### Create user record

```
curl -s http://localhost:3000/v1/user -X POST -H "X-Bunker-Token: DEMO" \
  -H "Content-Type: application/json" \
  -d '{"first":"John","last":"Doe","login":"john","phone":"4444","email":"user@gmail.com"}'
```

### Fetch user by email

```
curl -s -H "X-Bunker-Token: DEMO" -X GET http://localhost:3000/v1/user/email/user@gmail.com
```

### Fetch user by login

```
curl -s -H "X-Bunker-Token: DEMO" -X GET http://localhost:3000/v1/user/login/john
```

### Other commands:

For a full list of commands, follow the [API document](https://documenter.getpostman.com/view/11310294/Szmcbz32).
