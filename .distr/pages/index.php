{% extends "default.php" %}

{% block blocks %}
    {% include 'header/block.php' %}
    {% include 'about/block.php' %}
    {% include 'portfolio/block.php' %}
{% endblock %}

{% block popups %}
{% endblock %}

{% block script %}
    <script src="js/main.js"></script>
{% endblock %}