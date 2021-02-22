---
title: Howto
type: howto
headless: false
---
## Databunker Live demo

Live demo URL: https://demo.databunker.org/

You can use the following credentials:

* User phone: 4444
* User access code: 4444
* Admin token: DEMO

## Getting Started

The easiest way to get started with Databunker is to run it as a Docker container:

```
docker run -p 3000:3000 -d --rm --name dbunker securitybunker/databunker demo
```

This command starts Databunker in a local container with a `DEMO` root access key. You can use it for the development or testing purposes. For a production installation, follow this [installation guide](https://databunker.org/doc/install/).

### Connecting to Databunker

You can interact with Databunker using:

- [Web Console](https://demo.databunker.org/) listening on port `3000`: [localhost:3000](http://localhost:3000)
- [REST API](https://documenter.getpostman.com/view/11310294/Szmcbz32) listening on port `3000`: [localhost:3000](http://localhost:3000)


### Create a user record

```
curl -s http://localhost:3000/v1/user -X POST -H "X-Bunker-Token: DEMO" \
  -H "Content-Type: application/json" \
  -d '{"first":"John","last":"Doe","login":"john","phone":"4444","email":"user@gmail.com"}'
```

### Fetch user record by email

```
curl -s -H "X-Bunker-Token: DEMO" -X GET http://localhost:3000/v1/user/email/user@gmail.com
```

### Fetch user record by login

```
curl -s -H "X-Bunker-Token: DEMO" -X GET http://localhost:3000/v1/user/login/john
```

### Other commands:

For a full list of commands, follow the [API document](https://documenter.getpostman.com/view/11310294/Szmcbz32).

### Support / Contact

[Slack Channel](https://join.slack.com/t/databunker/shared_invite/zt-b6ukxzw3-JCxv8NJDESL40haM45RNIA)
