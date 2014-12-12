<header class="menu">

	<div class="container">

		<!-- Mobile Only Menu Button  -->
		<a href="#menu" class="menu-trigger"><i class="icon-reorder"></i></a>

		<!-- Logo  -->
		<a class="logo" href="{{ handles('app::/') }}">
			<img src="{!! asset('images/logo.png') !!}" alt="" title="">
		</a>

		<!-- Navigation -->
		<nav>
			<ul class="navigation">
				<li class="current"><a href="{!! handles('app::welcome') !!}">Home</a></li>
				<li><a href="{!! handles('app::about') !!}">About</a></li>
			</ul>
		</nav>
	</div><!-- End of container -->
</header>
