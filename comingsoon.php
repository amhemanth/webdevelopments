<!DOCTYPE html>
<html lang="en">
<head>
<title>Comingsoon</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->

	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">

	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Thasadith:400,400i,700,700i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
	<!-- //google fonts -->

</head>
<body>
<!-- //header -->
<?php require 'header.php'; ?>
<!-- //header -->

<!-- banner -->
<div class="inner-banner" id="home">
	<div class="container">
	</div>
</div>
<!-- //banner -->

<!-- Comingsoon -->
<section class="comingsoon py-5">
	<div class="container py-md-5">
		<div class="row">
			<div class="col-lg-6 offset-lg-6 col-md-8 offset-md-4">
				<h4>Under Construction</h4>
				<p class="mt-3">Our Gallery page is currently undergoing scheduled maintenance. We should be back shortly. Thank you for your patience.</p>
				<div class="mt-4">
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Enter your email id..." required="">
						<button class="form-control btn" value="">Subscribe</button>
					</form>
				</div>
				<p class="mt-2">Sign up now to get early notification!</p>
			</div>
		</div>
	</div>
</section>
<!-- //Comingsoon -->

<!-- footer -->
<?php require 'footer.php'; ?>
<!-- //footer -->

<!-- move top icon -->
	<a href="#home" class="move-top text-center"></a>
<!-- //move top icon -->


</body>
</html>
