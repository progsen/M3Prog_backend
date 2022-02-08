---
layout: home
title: Backend programming
nav_order: 0
has_toc: false
---

# Duurzaam Huis - {{ page.title }}

Op deze website vind je links naar de opdrachten voor de unit Backend Programming van de module Duurzaam Huis (F2M3 Duurzaam Huis).

Je gaat werken in een lege repository. Je krijgt jouw persoonlijke repository door op de blauwe knop te klikken.  
Dit hoef je maar één keer te doen. Je maakt alle opdrachten en oefeningen in deze repository.

- Kies vervolgens je eigen naam. 
- Er wordt een repository in jouw account gemaakt.
- Deze repository clone je naar jouw computer

[Jouw Backend programming repository maken]({{ site.bap.assignment_url }}){: .btn .btn-blue }

---

[Lees hier hoe je vervolgens de opdrachten maakt en inlevert](instructie){: .btn .btn-green }

---

## Lessen & Opdrachten

{% for lesson in site.data.lessons %}
{% assign today = "now"|date: "%Y-%m-%d" %}
{% assign lesson_date = lesson_date|date: "%Y-%m-%d" %}

{% if (lesson_date >= today) or site.bap.skip_date_check%}
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
