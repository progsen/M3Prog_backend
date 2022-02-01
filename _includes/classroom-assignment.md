{% assign lesson_number = include.les|plus:0  %}
{% assign lesson_index = lesson_number|minus:1 %}
{% assign lesson = site.data.lessons[lesson_index] %}
# Les {{ lesson_number }} - {{ lesson.title }}
{: .text-green-100 .fs-6 }

{{ lesson.description }}

{% if lesson.classroom_url %}
Begin met het accepteren van de Github Classroom opdracht voor deze les:

[Accepteer de assignment voor les {{ lesson_number }}]({{ lesson.classroom_url }}){: .btn .btn-green .fs-4 }

---

### Maak na het clonen van de opdracht repository, de opdrachten die hier onder staan
{: .text-green-200 .fs-5 }

---

## De opdrachten
{: .text-green-100 .fs-6 }

{% else %}
Deze opdracht komt binnenkort beschikbaar.
{% endif %}

