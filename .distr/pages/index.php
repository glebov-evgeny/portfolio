{% extends "default.php" %}

{% block blocks %}
    {% set IS_MAIN = true %}
    {% include 'header/block.php' %}
    {% include 'about/block.php' %}
    {% include 'portfolio/block.php' %}
    {#% include 'skills/block.php' %#}
    {% include 'contacts/block.php' %}
    {% include 'footer/block.php' %}
{% endblock %}

{% block popups %}
    {% include 'popups/block.php' %}
{% endblock %}

{% block script %}
    <script src="js/main.js"></script>
{% endblock %}