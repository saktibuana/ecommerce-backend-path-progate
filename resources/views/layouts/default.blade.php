<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"
        name="viewport">
    <title>@yield('title') &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet">
    @include ('components.head-tag');
</head>
<body>
    @include ('components.setting');
<!-- header wrapper start -->
<div id="header-container">
    @include ('components.subheader');
    @include ('components.header');
</div>
<!-- header wrapper end -->
<!-- wrapper start -->
<div id="wrapper">
<div class="clear"></div>
<div id="post-wrapper">
<div class="post-container">
<div id="myIdBlog">733967358392679046</div>
    @include ('components.slideshow');
    @include ('components.homebutton');
<div class="daftar-produk">
<h2>Daftar Produk</h2>
<a class="view-all" href="search49e5.html?max-results=12">View all</a>
</div>
<div class="main section" id="main">
<div class="widget Blog" data-version="1" id="Blog1">
<div class="blog-posts">
<!--Can"t find substitution for tag [defaultAdStart]-->
      
<!--Can"t find substitution for tag [adEnd]-->
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
<!-- sidebar wrapper -->
    @include ('components.aside');
<div class="clear"></div>
</div>
<!-- post wrapper end -->
<!-- fiktur start -->
    @include ('components.feature');
<div class="clear"></div>
<!-- aside widget -->
    @include ('components.sidebar');
<div class="clear"></div>
<!-- wrapper end -->
<!-- footer widget -->
   @include ('components.footer');
<!--=== nav footer ===-->
   @include ('components.navfooter');
<!--=== nav footer end ===-->
<!--=== footer wrapper end ===-->
<!-- post wrapper end -->
    @include ('components.analytics');
    @include ('components.script');
  </body>
</html>