
		<!--HEADER-->
		<header id="header" style="background-color: #fff;" data-uk-sticky="show-on-up: true; animation: uk-animation-fade; media: @l">
			<div class="uk-container">
				<nav id="navbar" data-uk-navbar="mode: click;">
					<div class="uk-navbar-left nav-overlay uk-visible@m">
						{{-- <ul class="uk-navbar-nav">
							<li>
								<a href="#" title="Subscribe">Subscribe</a>
							</li>
							<li>
								<a href="#" title="Sign Up">Sign Up</a>
							</li>
						</ul> --}}
					</div>
					<div class="uk-navbar-center nav-overlay">
						<a class="uk-navbar-item uk-logo" href={{route("home")}} title="Logo">LA TOUR LAFONTAINE</a>
					</div>
					<div class="uk-navbar-right nav-overlay">
						<a class="uk-navbar-toggle uk-visible@m" data-uk-search-icon data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
						<div class="uk-navbar-item">
							{{-- <a class="uk-visible@s" style="margin-right: 4px" href="#" data-uk-icon="facebook"></a>
							<a class="uk-visible@s" style="margin-right: 4px" href="#" data-uk-icon="twitter"></a>
							<a class="uk-visible@s" style="margin-right: 4px" href="#" data-uk-icon="instagram"></a>
							<a class="uk-navbar-toggle uk-hidden@m" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a> --}}
						</div>
						
					</div>
					<div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
						<div class="uk-navbar-item uk-width-expand">
							{{-- <form class="uk-search uk-search-navbar uk-width-1-1">
								<input class="uk-search-input" type="search" placeholder="Fonction search à venir..">
							</form> --}}
						</div>
						{{-- <a class="uk-navbar-toggle" data-uk-close data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a> --}}
					</div>
				</nav>
			</div>
		</header>
		<!--/HEADER-->
		<!-- NAVIGATION -->
		<div class="uk-container">
			<nav class="nav-scroll">
				<ul class="uk-subnav uk-flex uk-flex-between uk-flex-nowrap">
					<li class="uk-active"><a href={{route("home")}}>Acceuil</a></li>
					<li><a href={{route("petition")}}>Pétition</a></li>
					<li><a href={{route("regie")}}>Recours régie</a></li>
					<li><a href={{route("refuse")}}>Refus d'augmentation de loyer</a></li>
					{{-- <li><a href="#">Trends</a></li>
					<li><a href="#">Social Media</a></li>
					<li><a href="#">People</a></li>
					<li><a href="#">Science</a></li>
					<li><a href="#">Opinion</a></li>
					<li><a href="#">Culture</a></li>
					<li><a href="#">Community</a></li> --}}
				</ul>
			</nav>
		</div>
		<!-- /NAVIGATION -->

