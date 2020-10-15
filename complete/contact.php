<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap4.css">
		<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'menu.php'; ?>

	<div class="w-50 m-auto">
		<form action="contactinfo.php" method="post" class="mt-5">
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

<footer class="bg-dark text-center p-2 text-light mt-lg-5 ">
	<h4>Production-By-SlyderRohan</h4>
</footer>
	<script src="js/1.js"></script>
	<script src="js/2.js"></script>
	<script src="js/3.js"></script>
</body>
</html>