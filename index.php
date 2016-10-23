<!DOCTYPE html>
<html>
<head>
	<?php require "./includes/head.php"; ?>
	<title></title>
	<style type="text/css">
		p.indented {
			text-indent:25px;
		}
	</style>
</head>
<body style="background-color:#0c343d;">
	<?php require "./includes/body.php" ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand hidden-md hidden-lg hidden-xl" href="#">Dunne Hall</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<!--li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li-->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
							<!--li><a href="#">Alumni</a></li-->
							<li><a href="#">Freshmen</a></li>
							<li><a href="#">Parents</a></li>
							<li><a href="#">Events</a></li>
							<li><a href="#">Tacos</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<div>
			<!-- gallery -->
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-md-10 col-md-offset-1" style="background-color: #fff">
					<div class="row-fluid">
						<h1 class="text-center">
							We are Dunne Men!
						</h1>
						<div class="col-md-6 col-md-offset-1">
							<div class="well">
								<p class="indented">
									Spicy jalapeno bacon ipsum dolor amet prosciutto kevin pork loin flank corned beef tri-tip. Ham short loin turkey tail spare ribs jerky. Tenderloin ham alcatra meatloaf drumstick, pork belly shoulder shank sausage t-bone filet mignon. Turkey chicken tongue flank filet mignon biltong, ribeye meatball short ribs fatback. Prosciutto filet mignon doner ham hock ham turkey salami, tongue frankfurter hamburger landjaeger cupim tri-tip drumstick flank. Turkey filet mignon pork tail boudin, kielbasa fatback strip steak biltong ham venison hamburger pancetta jerky.
								</p>
								<p class="indented">
									Pancetta filet mignon landjaeger pork. Ham hock spare ribs ham rump, turkey picanha bacon chuck andouille. Tongue spare ribs jowl, shoulder frankfurter chuck chicken tenderloin burgdoggen biltong cow tri-tip strip steak t-bone sausage. Sausage salami kevin doner leberkas rump jerky tenderloin bacon landjaeger frankfurter meatloaf chuck shank. Cow jowl porchetta, andouille flank chuck biltong filet mignon pork chop short loin chicken short ribs spare ribs.
								</p>
							</div>
						</div>
						<div class="col-md-5">
							<img class="img-responsive center-block" src="http://placehold.it/400x400"></img>
						</div>
					</div>
					<div class="row-fluid">
						<div class="col-md-7 col-md-offset-1">
							<div class="well">
								<!-- calendar plugin -->
							</div>
						</div>
						<div class="col-md-3">
							<div class="well">
								<!-- newsfeed -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer>
				Credits to me.
			</footer>
		</body>
		</html>