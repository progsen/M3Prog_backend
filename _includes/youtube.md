## {% if include.title %}{{ include.title }}{% else %}Bekijk de video{% endif %} 

Bekijk de video **fullscreen**{% unless include.no_assignment %} en doe daarna de oefeningen / opdrachten{% endunless %}.

<div class="video"><div class="resp-container"><iframe class="resp-iframe" src="https://www.youtube.com/embed/{{ include.video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>
