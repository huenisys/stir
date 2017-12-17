<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="/">{{ $site_brand }}</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTop">

			@include('stir::layout.navbar._menu1')

			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-link fa-fw" aria-hidden="true"></i><span class="d-md-none d-lg-inline"> More Links </span></a>
					<div class="dropdown-menu dropdown-menu-right mb-2" aria-labelledby="dropdown01">
						@if (Auth::guest())
						<a class="dropdown-item" href="{{ url('/register') }}"><i class="fa fa-id-badge fa-fw" aria-hidden="true"></i> Register</a>
						@endif
						@include('stir::layout.navbar._menu2Drop')
					</div>
				</li>
			@if (Auth::check())
				<li class="nav-item dropdown">
					<a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="dropdown-profile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">[<i class="fa fa-user fa-fw" aria-hidden="true"></i> {{ Auth::user()->email }} ]</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-profile">
						<a class="dropdown-item" href="/dashboard#/home"><i class="fa fa-dashboard fa-fw" aria-hidden="true"></i> Dashboard</a>
						<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</div>
				</li>
			@else
				<li class="nav-item">
					<span class="d-block text-center"><a class="btn btn-outline-success" href="{{ route('login') }}"><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i> Login</a></span>
				</li>
			@endif
			</ul>
		</div><!-- /.collapse.navbar-collapse -->
	</div><!-- /.container -->
</nav>


