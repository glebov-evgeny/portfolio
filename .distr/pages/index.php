{% extends "default.php" %}

{% block blocks %}
    {% set IS_MAIN = true %}
    {% include 'main/block.php' %}
{% endblock %}

{% block popups %}
{% endblock %}

{% block script %}
    <script src="js/main.js"></script>
{% endblock %}