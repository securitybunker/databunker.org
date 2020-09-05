---
title: Trace customer profile changes and access
summary: An example talk using academia's Markdown slides feature.
abstract: ""
weight: 20
authors: []
tags: []
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

# Enable math on this page?
math: true
---

{{% alert note %}}
Click on the **Slides** button above to view the built-in slides feature.
{{% /alert %}}

Many times we need to find important events that occurred on database server, but we may not always have a process in place to capture this data.

By default, Databunker has auditing capability built-in, it saves audit trail on all user data related API operations. For example, new personal record added or changed; personal information record retrieved; or record change, etc...

By providing Audit of events, in relation to personal data, provides response to GDRP Article 15 requirement:
*Right of access by the data subject*.

Special features:

* Personal information in audit event is encrypted.
* Customer can view only his own records.
* Event drill down view for change operations to actually see what was changed in the record.

Each audit record consists of:

* Date and time
* Operation title
* Operation status
* Operation description
* Change before and after if applicable
