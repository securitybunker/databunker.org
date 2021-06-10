---
title: Audit trail and trace customer profile changes
summary: Databunker saved audit trail for all operations.
abstract: ""
weight: 20
authors: []
tags: []
type: docs
mymenu: usecase
featured: false
image:
  caption: 'Image'
  focal_point: Right

links:
#- icon: twitter
#  icon_pack: fab
#  name: Follow
#  url: https://twitter.com/georgecushen
url_code: ""
url_pdf: ""
url_slides: ""
url_video: ""

# Projects (optional).
#   Associate this post with one or more of your projects.
#   Simply enter your project's folder or file name without extension.
#   E.g. `projects = ["internal-project"]` references `content/project/deep-learning/index.md`.
#   Otherwise, set `projects = []`.
projects:
# - internal-project
---
Many times we need to find important events that occurred on the database server, but we may not always have a process in place to capture this data.

By default, Databunker has auditing capability built-in, it saves audit trail on all user data related API operations. For example, new personal records added or changed; personal information retrieved, etc...

By providing Audit of events, in relation to personal data, provides a partial response to GDRP Article 15 requirement:
*Right of access by the data subject*.

Special features:

* All personal information in the audit event is encrypted.
* Customer can view only his own records.
* Event drill-down view to actually see what was changed in the record.

Each audit record consists of:

* Date and time
* Operation title
* Operation status
* Operation description
* User identity performing operation
* Change before and after if applicable
