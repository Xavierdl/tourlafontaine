<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>News Blog - UIkit 3 KickOff</title>
		<link rel="icon" href="img/favicon.ico">
		<!-- CSS FILES -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/css/uikit.min.css">
		<style>
			nav.nav-scroll {
				position: relative;
				z-index: 2;
				height: 2rem;
				box-sizing: border-box;
				overflow-y: hidden;
				padding: 1rem;
				border-top: 1px solid rgba(0,0,0,0.075);
				line-height: 1em;
			}
			nav.nav-scroll > ul {
				overflow-x: auto;
				text-align: center;
				white-space: nowrap;
				-webkit-overflow-scrolling: touch;
				padding-bottom: 1rem;
			}
			nav.nav-scroll > ul > li > a {
				font-weight: 500;
			}
			.news-slide > li > .uk-card {
				box-shadow: none;
				border:  1px solid rgba(0,0,0,0.075);
			}
			h1, h2, h3, h4, h5, h6 {
				font-weight: 700;
			}
			.uk-logo{
				font-size: 30px;
	
			}
			#header.uk-sticky-below {
				box-shadow: 0 2px 14px 0 rgba(0,0,0,0.07);
			}
			
		</style>
	</head>
	<body>
	@include('layouts.header')
	
	 @yield('content')

	 
		<!-- JS FILES -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.2.0/js/uikit-icons.min.js"></script>
	</body>
</html>
