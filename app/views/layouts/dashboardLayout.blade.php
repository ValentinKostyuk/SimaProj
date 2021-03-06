<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin Dashboard</title>
		<link rel="stylesheet" href="/statics/styles/dashboard.css">
		<link rel="stylesheet" href="/statics/fonts/fontello-fcdb8aa6/css/simafont.css">
		<script type="text/javascript" src="/statics/scripts/libs/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="/statics/scripts/dashboardLayoutInit.js"></script>
	</head>
	<body>
		<div class="whole-page-wrapper">
			<header class="header-wrapper">
				<div class="header-wrapper-inner">
					<div class="header-container">
						<h2 class="header-container-heading"><i class="icon-tools"></i>System Dashboard<i class="icon-cog"></i></h2>
						<div class="header-container-ruler"></div>
						<nav class="header-container-user-menu">
							<ul class="header-container-user-nav-menu">
								<li class="header-container-user-nav-menu-item user-menu-item">
									<span>{{{Auth::user()->username}}}</span>
									<div class="header-container-user-sub-nav">
										<ul class="header-container-user-sub-nav-menu">
											<li class="header-container-user-sub-nav-menu-item user-menu-item">
												<a href="{{{action('AuthController@logout')}}}">Logout</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
						<nav class="header-main-site-nav">
							<ul class="header-main-site-nav-menu">
								<li class="header-main-site-nav-menu-item main-menu-item">
									<a href="/dashboard">Dashboard</a>
								</li>
								<li class="header-main-site-nav-menu-item main-menu-item">
									<a href="{{{action('UserManagementController@users')}}}" onclick="return false;">Users</a>
									<div class="header-main-site-sub-nav">
										<ul class="header-main-site-sub-nav-menu">
											<li class="header-main-site-sub-nav-menu-item main-menu-item">
												<a href="{{{action('UserManagementController@users')}}}">View all users</a>
											</li>
											<li class="header-main-site-sub-nav-menu-item main-menu-item">
												<a href="{{{action('UserManagementController@createUserGet')}}}">Create new user</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="header-main-site-nav-menu-item main-menu-item">
									<a href="{{{action('CarouselManagementController@carouselItems')}}}" onclick="return false;">Manage Carousel</a>
									<div class="header-main-site-sub-nav">
										<ul class="header-main-site-sub-nav-menu">
											<li class="header-main-site-sub-nav-menu-item main-menu-item">
												<a href="{{{action('CarouselManagementController@carouselItems')}}}">View all carousel items</a>
											</li>
											<li class="header-main-site-sub-nav-menu-item main-menu-item">
												<a href="{{{action('CarouselManagementController@createCarouselItemGet')}}}">Create carousel item</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="header-main-site-nav-menu-item main-menu-item">
									<a href="{{{action('ProductManagementController@productItems')}}}" onclick="return false;">Manage Products</a>
									<div class="header-main-site-sub-nav">
										<ul class="header-main-site-sub-nav-menu">
											<li class="header-main-site-sub-nav-menu-item main-menu-item">
												<a href="{{{action('ProductManagementController@productItems')}}}">View all products</a>
											</li>
											<li class="header-main-site-sub-nav-menu-item main-menu-item">
												<a href="{{{action('ProductManagementController@createProductItemGet')}}}">Create product</a>
											</li>
										</ul>
									</div>
								</li>
								<li class="header-main-site-nav-menu-item main-menu-item">
									<a href="{{{action('ArticleManagementController@articleItems')}}}" onclick="return false;">Manage Articles</a>
									<div class="header-main-site-sub-nav">
										<ul class="header-main-site-sub-nav-menu">
											<li class="header-main-site-sub-nav-menu-item main-menu-item">
												<a href="{{{action('ArticleManagementController@articleItems')}}}">View all articles</a>
											</li>
											<li class="header-main-site-sub-nav-menu-item main-menu-item">
												<a href="{{{action('ArticleManagementController@createArticleItemGet')}}}">Create article</a>
											</li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
						<div class="header-container-ruler"></div>
					</div>
				</div>
			</header>
			<div class="main-content-wrapper">
				@if (isset($modelState) && isset($modelState['errors']))
				<div class="main-content-error-wrapper">
					<h3 class="main-content-error-wrapper-heading">You have following errors, during request submission:</h3>
					<ul class="main-content-error-wrapper-list">
						@foreach ($modelState['errors'] as $error)
						<li class="main-content-error-wrapper-list-item">{{$error}}</li>
						@endforeach
					</ul>
				</div>
				@endif
				@if (isset($modelState) && isset($modelState['success']))
				<div class="main-content-success-wrapper">
					<h3 class="main-content-success-wrapper-heading">Request completed successfully:</h3>
					<ul class="main-content-success-wrapper-list">
						@foreach ($modelState['success'] as $success)
						<li class="main-content-success-wrapper-list-item">{{$success}}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div class="main-content-container">
					@yield('content', 'Hmm, that\'s interesting! I don\'t know what to say...')
				</div>
			</div>
			<footer class="footer-wrapper">
				<div class="footer-inner">
					<div class="footer-container-ruler"></div>
					<div class="copyright-like">
						<a href="http://valentin-kostiuk.16mb.com" target="_blank">2014 by vk<sup>&copy;</sup></a>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>