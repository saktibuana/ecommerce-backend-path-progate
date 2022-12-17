<title>Title</title>
@include ('components.meta');

<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- {% if page.layout == "default" %} -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('/assets/css/style.scss') }}" />
<link rel="alternate" type="application/rss+xml" title="{{ config('app.name') }} - {{ config('app.desc') }}" href="{{ config('app.url') }}/feed.xml" />
<!-- {% endif %}
{% if page.url contains '/products/' %}
{% include product-css.html %}
{% endif %}
{% if page.url contains '/cart' %}
{% include cart-css.html %}
{% endif %}
{% if page.url contains '/checkout' %}
{% include checkout-css.html %}
{% endif %} -->
<script async="async" src="{{ URL::asset('/assets/js/jquery/jquery.min.js') }}"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>