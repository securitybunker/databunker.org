---
title: Databunker benchmark results
linktitle: Project benchmark results
toc: true
type: docs
date: "2019-05-05T00:00:00+01:00"
draft: false
slug: doc

# Prev/next pager order (if `docs_section_pager` enabled in `params.toml`)
weight: 1
---

## Description of the test

For the test, we are using a regular VPC (droplet) hosted at https://www.digitalocean.com/ to run all processes.

This VPC comes with the following configuration: **1 GB RAM** / **1 Intel CPU** / **25 GB NVMe SSD**.

We run the system test for Databunker - meaning we test the whole stack - both Node.js, Databunker, and backend database (MySQL).  For the test, we created a simple Node.js app server. This app server supports a single operation that prints user email returned from Databunker.

On each API request, Databunker goes to MySQL and loads user record (```SELECT``` MySQL command), decrypts the record, creates an audit trail (```INSERT``` MySQL command) and returns the user object to the caller. To make sure we are getting the best results, we updated node.js libraries to reuse open HTTP/HTTPS sockets.

Our test includes the following components:

1. Databunker running locally as the docker container.
2. MySQL server running locally as a docker container.
3. Node.js app server running locally.
4. Shell ```ab``` command running locally is used to test the results.

Final results: **Node.js app server can sustain 155 requests per second when loading data from Databunker**.

## Node.js app server code

```
const { v4: uuidv4 } = require('uuid');
const app = require('express')();
const DatabunkerStore = require('@databunker/store');

const port = 3200;
const host = '0.0.0.0';
const DataBunkerConf = {
  url: 'http://localhost:3000',
  token: 'DEMO'
};
const databunker = new DatabunkerStore(DataBunkerConf);

app.get('/', async (req, res) => {
  const user = await databunker.users.get("phone", "4444");
  const data = user.data;
  res.send("user: "+data["email"]+"\n");
  res.end();
})

app.listen(port, host, () => {
  console.log(`Example app listening at http://${host}:${port}`)
})
```

## Shell ab command

```ab -n 1000 -c 10 http://0.0.0.0:3200/```

#### Result:

```
ab -n 1000 -c 10 http://0.0.0.0:3200/
This is ApacheBench, Version 2.3 <$Revision: 1843412 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking 0.0.0.0 (be patient)
Completed 100 requests
Completed 200 requests
Completed 300 requests
Completed 400 requests
Completed 500 requests
Completed 600 requests
Completed 700 requests
Completed 800 requests
Completed 900 requests
Completed 1000 requests
Finished 1000 requests


Server Software:
Server Hostname:        0.0.0.0
Server Port:            3200

Document Path:          /
Document Length:        34 bytes

Concurrency Level:      10
Time taken for tests:   6.416 seconds
Complete requests:      1000
Failed requests:        0
Total transferred:      234000 bytes
HTML transferred:       34000 bytes
Requests per second:    155.86 [#/sec] (mean)
Time per request:       64.162 [ms] (mean)
Time per request:       6.416 [ms] (mean, across all concurrent requests)
Transfer rate:          35.62 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.1      0       1
Processing:    11   64  18.0     61     163
Waiting:        7   63  17.1     60     154
Total:         12   64  18.0     61     163

Percentage of the requests served within a certain time (ms)
  50%     61
  66%     66
  75%     72
  80%     76
  90%     85
  95%     95
  98%    113
  99%    128
 100%    163 (longest request)
```
