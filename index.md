---
layout: home
title: Backend programming
nav_order: 0
has_toc: false
---

# Duurzaam Huis - {{ page.title }}

Op deze website vind je links naar de opdrachten voor de unit Backend Programming van de module Duurzaam Huis (F2M3 Duurzaam Huis).

[Lees hier hoe je de opdrachten maakt en inlevert](instructie){: .btn .btn-green }

---

## Lessen & Opdrachten

{% for lesson in site.data.lessons %}

{% if lesson.description != undefined %}
## Les {{ lesson.number }}:  {{ lesson.title }}
{: .text-blue-100 :}

{{ lesson.description }}

[Start](les-{{ lesson.number }} ){: .btn .btn-blue }
{% else %}
## Les {{ lesson.number }}:  {{ lesson.title }}
{: .text-grey-dk-000 :}

Deze les komt binnenkort online.
{% endif %}
---

{% endfor %}
