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
		<link type="text/css" href="../css/epic.css" rel="stylesheet"/>

		<!-- Favicon -->
		<link type="image/ico" href="/images/quote.ico" rel="shortcut icon"/>

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
						<i class="fa fa-quote-left"></i> <i class="fa fa-quote-right"></i>
						Quote of the Day:
						<span class="header-thin">Documentation</span>

						<ul class="nav nav-pills pull-right">
							<li role="presentation"><a href="../index.php">Home</a></li>
							<li role="presentation"><a href="../submit.php">Submit/Vote</a></li>
							<li role="presentation"><a href="#">Documentation</a></li>
						</ul>
					</div>
				</div>
			</header>
			<div class="container">
				<div class="row">
					<h1>Epic</h1>
				</div>

				<!-- System Goals -->
				<div class="row">
					<div class="col-md-4">
						<h2 class="color-cover rounded flex">
							<i class="fa fa-check-square-o icon"></i>

							<div>System Goals</div>
						</h2>
					</div>
					<div class="col-md-8">
						<div class="p color-cover rounded">
							The goal of this project is to provide a platform in which a "quote of the day" can be
							uploaded and shared with the class.
						</div>
					</div>
				</div>

				<!-- Personas -->
				<div class="row">
					<div class="col-md-4">
						<h2 class="color-cover rounded flex">
							<i class="fa fa-male icon"></i>

							<div>Personas</div>
						</h2>
					</div>
					<div class="col-md-8">
						<div class="p color-cover rounded">
							<span class="epic-attribute">Dyllin MickDambles</span>
							<br/>
							<span class="epic-attribute">Age:</span> "Younger Than Charles, Apparently"
							<br/>
							<span class="epic-attribute">Occupation:</span> Captain of the Deep Dive Coding
							Bootcamp
							<br/>
							<span class="epic-attribute">Tech:</span> Dyllin is very comfortable will all sorts
							of technology, except Windows. He is not comfortable with Windows at all.
							<br/>
							<span class="epic-attribute">Needs:</span> Dyllin <em>needs</em> to
							share the funny things (or rather, funni<em>est</em> thing) that he and other people say
							each day.
							<br/>
							<span class="epic-attribute">Goal:</span> Dyllin wants to be able to post these quotes to
							a web page that will display them for the whole class.
							<br/>
							<br/>
							<span class="epic-attribute">Skillet Rexramb</span>
							<br/>
							<span class="epic-attribute">Age:</span> Not pub age
							<br/>
							<span class="epic-attribute">Occupation:</span> Student/Regional Overlord at the Deep
							Dive Coding
							Bootcamp
							<br/>
							<span class="epic-attribute">Tech:</span> Skillet can use all of the newfangled
							gadgets. He loves to learn new things about technology.
							<br/>
							<span class="epic-attribute">Needs:</span> Skillet says
							<em>hilarious</em> things <em>every day</em>, and wants to force these things upon other
							people.
							<br/>
							<span class="epic-attribute">Goal:</span> Skillet wants to win the approval of Dyllin and
							have his quotes posted to the QotD page to be shared with the rest of humanity.
						</div>
					</div>
				</div>

				<!-- Use Cases -->
				<div class="row">
					<div class="col-md-4">
						<h2 class="color-cover rounded flex">
							<i class="fa fa-suitcase icon"></i>

							<div>Use Cases</div>
						</h2>
					</div>
					<div class="col-md-8">
						<div class="p color-cover rounded">
							<span class="epic-attribute">Posting a quote:</span>
							<ol>
								<li>
									Sign in to the QotD site.
								</li>
								<li>
									Fill out the "Quote" and "Attribution" fields.
								</li>
								<li>
									The QotD page will do the rest and post the quote to the front page.
								</li>
							</ol>
							<span class="epic-attribute">Upvoting/Downvoting:</span>
							<ol>
								<li>
									Sign in to the QotD site.
								</li>
								<li>
									Fill out the students name and number of upvotes (can be a negative number).
								</li>
								<li>
									The QotD page will do the rest and add to the person's score accordingly.
								</li>
							</ol>
						</div>
					</div>
				</div>

				<!-- Conceptual Schema -->
				<div class="row">
					<div class="col-md-4">
						<h2 class="color-cover rounded flex">
							<i class="fa fa-cog icon"></i>

							<div>Conceptual Schema</div>
						</h2>
					</div>
					<div class="col-md-8">
						<div class="p color-cover rounded">
							<p>
								There will be a student table. Each student will have an ID and a score.
							</p>
						</div>
					</div>
				</div>

				<!-- Entity Relationship Diagram -->
				<div class="row">
					<div class="col-md-4">
						<h2 class="color-cover rounded flex">
							<i class="fa fa-sitemap icon"></i>

							<div>Entity Relationship Diagram</div>
						</h2>
					</div>
					<div class="col-md-8">
						<div class="p color-cover rounded">
							<code>// TODO: Entity Relationship Diagram</code>
						</div>
					</div>
				</div>

				<!-- System Summary -->
				<div class="row">
					<div class="col-md-4">
						<h2 class="color-cover rounded flex">
							<i class="fa fa-terminal icon"></i>

							<div>System Summary</div>
						</h2>
					</div>
					<div class="col-md-8">
						<div class="p color-cover rounded">
							<p>
								The Quote of the Day page will be a page that displays the Quote of the Day for all to
								see.
							</p>

							<p>
								It will pull from a special Twitter account (@DeepDiveQuotes) on a regular basis in
								order to stay up to date with the latest quotes.
							</p>

							<p>
								The Quote of the Day page will have a simple user experience on both sides of the
								coin, viewing and uploading.
							</p>
						</div>
					</div>
				</div>

				<!-- Development Roadmap -->
				<div class="row">
					<div class="col-md-4">
						<h2 class="color-cover rounded flex">
							<i class="fa fa-road icon"></i>

							<div>Development Roadmap</div>
						</h2>
					</div>
					<div class="col-md-8">
						<div class="p color-cover rounded">
							<span class="epic-attribute">Frontend:</span>
							<ul>
								<li>
									Minimalist single-page design
								</li>
								<li>
									Quote featured in the main section of the page
								</li>
								<li>
									List of past quotes
								</li>
							</ul>
							<span class="epic-attribute">Backend:</span>
							<ul>
								<li>
									Functionality to pull from @DeepDiveQuotes
								</li>
								<li>
									Table of students, with upvote/downvote stats
								</li>
								<li>
									Ability for instructors (and only instructors) to upvote and downvote students
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- User Stories -->
				<div class="row">
					<div class="col-md-4">
						<h2 class="color-cover rounded flex">
							<i class="fa fa-users icon"></i>

							<div>User Stories</div>
						</h2>
					</div>
					<div class="col-md-8">
						<div class="p color-cover rounded">
							<ul>
								<li>
									I am a student who said something hilarious, and my ego commands me to push it in
									the faces of my classmates.
								</li>
								<li>
									I am an instructor, and I want to share the funny/clever things my students say.
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			&copy; Created by Skyler Rexroad in 2015
		</footer>
	</body>
</html>