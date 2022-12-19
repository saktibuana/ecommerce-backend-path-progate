<!DOCTYPE html>
<html lang="en">
<head>
    @include ('components.head')
</head>
<body class="inner-page about-us ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
    @include ('components.section-header')

	<!--main area-->
	@include ('components.section-main')
	<!--main area-->

	<!--footer area-->
    @include ('components.section-footer');

	@include ('components.scripts-footer');
	<!--footer area-->
</body>
</html>