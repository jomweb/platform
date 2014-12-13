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
						{!! data_get($user, 'profile.username', data_get($user, 'fullname')) !!}
					</a>
					<ul class="dropdown-menu">
						<li role="presentation" class="dropdown-header">Profile</li>
						@if (is_null($user->profile))
						<li><a href="{!! handles('app::profile/create') !!}">Create Your Profile</a></li>
						@endif
						<li role="presentation" class="dropdown-header">Account</li>
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
