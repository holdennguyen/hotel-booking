<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel - CONTACT</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
  
  <?php require('inc/header.php'); ?>

  	<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">CONTACT US</h2>
		<div class="h-line bg-dark"></div>
		<p>
			Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, asperiores omnis.
			Recusandae, saepe quia sint labore, cum earum rem iure voluptatem id consequuntur tempore? Ratione sed hic voluptatem ab? Et!
		</p>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 mb-5 px-4">

				<div class="bg-white rounded shadow p-4">
					<iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19012.58088221806!2d106.69019515597192!3d10.863584409285528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529c17978287d%3A0xec48f5a17b7d5741!2sNguyen%20Tat%20Thanh%20University%20-%20Campus%20District%2012!5e0!3m2!1sen!2s!4v1732644696049!5m2!1sen!2s" loading="lazy"></iframe>
					
					<h5>Address</h5>
					<a href="https://maps.app.goo.gl/mGjiwYxCWZmCiKBw5" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
						<i class="bi bi-geo-alt-fill"></i> Nguyen Tat Thanh University - Campus District 12
					</a>
					
					<h5 class="mt-4">Call us</h5>
					<a href="tel: +8286828682" class="d-inline-block mb-2 text-decoration-none text-dark">
						<i class="bi bi-telephone-fill"></i> +8286828682
					</a>
					<br>
					<a href="tel: +8286828682" class="d-inline-block mb-2 text-decoration-none text-dark">
						<i class="bi bi-telephone-fill"></i> +8286828682
					</a>
					
					<h5 class="mt-4">Email</h5>
					<a href="mailto: holdennguyen6174@gmail.com" class="d-inline-block text-decoration-none text-dark">
						<i class="bi bi-envelope-fill"></i> holdennguyen6174@gmail.com
					</a>
					
					<h5 class="mt-4">Follow us</h5>
					<a href="#" class="d-inline-block text-dark fs-5 me-2">
						<i class="bi bi-tiktok me-1"></i>
					</a>
					<a href="#" class="d-inline-block text-dark fs-5 me-2">
						<i class="bi bi-facebook me-1"></i>
					</a>
					<a href="#" class="d-inline-block text-dark fs-5">
						<i class="bi bi-instagram me-1"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 px-4">
				<div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
					<form>
						<h5>Send a message</h5>
						<div class="mt-3">
							<label class="form-label" style="font-weight: 500;">Name</label>
							<input type="text" class="form-control shadow-none">
						</div>
						<div class="mt-3">
							<label class="form-label" style="font-weight: 500;">Email</label>
							<input type="email" class="form-control shadow-none">
						</div>
						<div class="mt-3">
							<label class="form-label" style="font-weight: 500;">Subject</label>
							<input type="text" class="form-control shadow-none">
						</div>
						<div class="mt-3">
							<label class="form-label" style="font-weight: 500;">Message</label>
							<textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
						</div>
						<button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
					</form>
				</div>
			</div>
		</div>
	</div>

  <?php require('inc/footer.php'); ?>

</body>
</html>