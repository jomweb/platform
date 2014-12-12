<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	@include('layouts.partials.header')
</head>

<body>

<!-- Main Menu / Start
================================================== -->
@include('layouts.partials.navigation')
<!-- Main Menu / End
================================================== -->

@yield('content')

<!-- Footer / Start
================================================== -->
@include('layouts.partials.footer')
<!-- ==================================================
Footer / End -->

</html>
