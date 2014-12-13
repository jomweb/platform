<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{!! handles('app::/') !!}">{!! memorize('site.name') !!}</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{!! handles('app::/') !!}">Home</a></li>
				@if (! is_null($user))
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					@if (! is_null($user->profile))
					{!! $user->profile->username !!}
					@else
					{!! $user->fullname !!}
					@endif
					</a>
					<ul class="dropdown-menu">
						<li><a href="{!! handles('app::auth/logout') !!}">Logout</a></li>
					</ul>
				</li>
				@else
				<li><a href="{!! handles('app::auth/login') !!}">Login</a></li>
				@endif
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
