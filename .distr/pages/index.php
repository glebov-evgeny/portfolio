{% extends "default.php" %}

{% block blocks %}
<main class="main" id="main">
    <div class="main__bg main__bg-1"></div>
    <div class="main__bg main__bg-2">
        {% include 'header/block.php' %}
        {% include 'about/block.php' %}
    </div>
</main>
{% endblock %}

{% block popups %}
{% endblock %}

{% block script %}
    <script src="js/main.js"></script>
{% endblock %}