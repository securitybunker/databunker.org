---
title: GDPR compliant logging
summary: An example talk using academia's Markdown slides feature.
abstract: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere tellusac convallis placerat. Proin tincidunt magna sed ex sollicitudin condimentum. Sed ac faucibus dolor, scelerisque sollicitudin nisi. Cras purus urna, suscipit quis sapien eu, pulvinar tempor diam."

authors: []
tags: []

# Is this a featured talk? (true/false)
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

Web or mobile application session data is very similar. They contain customer IP address, browser information, web server headers, logged-in customer info, etc... Many systems, including popular webservers, like Nginx, Apache simply store this information in logs. This information, according to GDPR is considered personal identifiable information and must be secured and controlled.

So, you can not save customer ip or browser information in logs now. Insead, Data Bunker will generate you a special token to save in logs. Data Bunker provides you an API to retrieve this info out of Data Bunker without additional password for a limited time as in GDPR. For example one month.
