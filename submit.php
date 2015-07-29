<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Optional Bootstrap theme -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
			  rel="stylesheet"/>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- Google WebFonts -->
		<link
			href='//fonts.googleapis.com/css?family=Roboto:400,100italic,100,300,300italic,400italic,500,500italic,700,700italic'
			rel='stylesheet' type='text/css'>

		<!-- Custom CSS -->
		<link type="text/css" href="css/style.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript"
				src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		<script type="text/javascript"
				src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.1/additional-methods.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<title>Class Quote of the Day</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<header>
				<div class="container">
					<div class="logo">
						<i class="fa fa-quote-left"></i> <i class="fa fa-quote-right"></i> Quote of the Day

						<ul class="nav nav-pills pull-right">
							<li role="presentation"><a href="index.php">Home</a></li>
							<li role="presentation"><a href="#">Submit</a></li>
							<li role="presentation"><a href="documentation/epic.php">Documentation</a></li>
						</ul>
					</div>
				</div>
			</header>
			<div class="container">
				<div class="row">
					<h1 class="h1-alt">
						Post a quote
					</h1>
				</div>
				<div class="row rounded">
					<!--begin main content panel-->
					<main class="content-main col-xs-12 col-md-12">
						<form class="form-horizontal well" id="sshKeyLoginForm" method="post"
							  action="/lib/php/ad-authenticate.php">
							<h2>Sign In</h2>
							<section class="padding-lr form-group">
								<label for="username">Username</label>

								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<input type="text" id="username" name="username" placeholder="myCNM Username"
										   class="form-control"/>
								</div>
							</section>
							<section class="padding-lr form-group">
								<label for="password">Password</label>

								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-key" aria-hidden="true"></i>
									</div>
									<input type="password" id="password" name="password" placeholder="myCNM Password"
										   class="form-control"/>
								</div>
							</section>
							<hr/>
							<button class="btn btn-lg btn-info" type="submit"><i class="fa fa-sign-in"></i>&nbsp;Sign In
							</button>
							<button class="btn btn-lg btn-warning" type="reset">Reset</button>
						</form>
						<section id="outputArea"></section>
					</main>
					<!--.content-main-->
				</div>
			</div>
		</div>
		<footer>
			&copy; Created by Skyler Rexroad in 2015
		</footer>
	</body>
</html>