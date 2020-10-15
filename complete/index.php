<!DOCTYPE html>
<html>
	<head>
		<title>Naturel World</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap4.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
 <?php include 'menu.php'; ?>
	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/1.jpg" alt="Los Angeles" width="1100" height="500">
				<div class="carousel-caption">
					<h3>Los Angeles</h3>
					<p>We had such a great time in LA!</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/2.jpg" alt="Chicago" width="1100" height="500">
				<div class="carousel-caption">
					<h3>Chicago</h3>
					<p>Thank you, Chicago!</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/3.jpg" alt="New York" width="1100" height="500">
				<div class="carousel-caption">
					<h3>New York</h3>
					<p>We love the Big Apple!</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<section class="my-5">
		<div class="my-5">
			<h2 class="text-center">About Us</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<img src="img/5.jpg" class="img-fluid aboutimg">
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<h2 class="display-4">I am Nature.</h2>
					<p class="py-2">Nature, in the broadest sense, is the natural, physical, or material world or universe. "Nature" can refer to the phenomena of the physical world, and also to life in general. The study of nature is a large, if not the only, part of science. Although humans are part of nature, human activity is often understood as a separate category from other natural phenomena.The word nature is derived from the Latin word natura, or "essential qualities, innate disposition", and in ancient times, literally meant "birth".</p>
					<a href="about.php" class="btn btn-success">About Me</a>
				</div>
			</div>
		</div>
	</section>
	<section class="my-5">
		<div class="my-5">
			<h2 class="text-center">Gallery</h2>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/5.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/5.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/5.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/5.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/5.jpg" class="img-fluid pb-4">
				</div>
				<div class="col-lg-4 col-md-4 col-12">
					<img src="img/5.jpg" class="img-fluid pb-4">
				</div>
			</div>
		</div>

<section class="my-5">
	<div class="my-5">
		<h2 class="text-center">Contact</h2>
	</div>

	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="Email" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile No.</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Massage</label>
				<textarea class="form-control" name="comments">
				</textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>
	</section>
<footer class="bg-dark text-center p-2 text-light">
	<h4>Production-By-SlyderRohan</h4>
</footer>
	<script src="js/1.js"></script>
	<script src="js/2.js"></script>
	<script src="js/3.js"></script>
</body>
</html>