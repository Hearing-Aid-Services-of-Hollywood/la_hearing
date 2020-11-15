---
---
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta property="og:url" content="{{site.url}}" />
	    <meta property="og:title" content="{{ page.title }} | {{ site.title }" />
	    <meta property="og:image" content="" />
	    <meta property="og:image:width" content="600" />
	    <meta property="og:image:height" content="315" />
	    <meta property="og:description" content="{{ site.description }}" />
		<meta name="description" content="{{ site.description }}">
		<meta name="author" content="{{ site.title }}">

		<!-- JS -->
		<script   src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/9e839e4736.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

		<script src="{{ 'assets/js/main.js' | relative_url}}"></script>
		<script src="{{ 'assets/js/jquery.easing.min.js' | relative_url}}"></script>
		<script src="{{ 'assets/js/jquery.parallax.js' | relative_url}}"></script>
		<script src="{{ 'assets/js/main.js' | relative_url}}"></script>

		<!-- Style/Fonts -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
		<?php print load_stylesheets(); ?>

		{% feed_meta %}
	    {% seo %}

	    {% if jekyll.environment == "production" %}
	    	{% include analytics_tracking.html %}
	    {% endif %}

		<title>{{page.title}} | {{site.title}}</title>

	</head>
	<body id=#page-top>
		{% include navigation.html %}
		{{ content }}
		{% include footer.html %}
	</body>
</html>