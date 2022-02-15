{% assign lesson_number = include.les|plus:0  %}
{% assign lesson_index = lesson_number|minus:1 %}
{% assign lesson = site.data.lessons[lesson_index] %}
{% assign today = "now"|date:"%Y%m%d" %}
{% assign lesson_date = lesson.datum|date:"%Y%m%d" %}
# Les {{ lesson_number }} - {{ lesson.title }}
{: .text-green-200 .fs-7 }

![Cover image](cover.jpg)

{{ lesson.description }}

---

{% if (lesson_date <= today) or site.bap.skip_date_check%}

{% include_relative _assignments.md %}

{% else %}
### Deze opdracht komt binnenkort beschikbaar.
{: .text-blue-100 .fs-5 }
{% endif %}

