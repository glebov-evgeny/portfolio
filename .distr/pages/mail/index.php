{% extends "default.php" %}

{% block blocks %}
    {% include 'header/block.php' %}
    {% include 'contacts/block2.php' %}
    {% include 'footer/block.php' %}
{% endblock %}

{% block popups %}
    {% include 'popups/block.php' %}
{% endblock %}

{% block script %}
    <script src="js/main.js"></script>
{% endblock %}