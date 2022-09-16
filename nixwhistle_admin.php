<?php 
include('onboarding/db_configuration_master.php');

?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- SEO Meta description -->
<meta name="description"
content="BizBite corporate business template or agency and marketing template helps you easily create websites for your business.">
<meta name="author" content="ThemeTags">

<!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
<meta property="og:site_name" content=""/> <!-- website name -->
<meta property="og:site" content=""/> <!-- website link -->
<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
<meta property="og:description" content=""/> <!-- description shown in the actual shared post -->
<meta property="og:image" content=""/> <!-- image link, make sure it's jpg -->
<meta property="og:url" content=""/> <!-- where do you want your post to link to -->
<meta property="og:type" content="article"/>

<!--title-->
<title>NixWhistle Channel</title>

<!--favicon icon-->
<link rel="icon" href="onboarding/img/favicon.png" type="image/png" sizes="16x16">

<!--google fonts-->
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700%7COpen+Sans&display=swap"
rel="stylesheet">

<!--Bootstrap css-->
<link rel="stylesheet" href="onboarding/css/bootstrap.min.css">
<!--Magnific popup css-->
<link rel="stylesheet" href="onboarding/css/magnific-popup.css">
<!--Themify icon css-->
<link rel="stylesheet" href="onboarding/css/themify-icons.css">
<!--animated css-->
<link rel="stylesheet" href="onboarding/css/animate.min.css">
<!--ytplayer css-->
<link rel="stylesheet" href="onboarding/css/jquery.mb.YTPlayer.min.css">
<!--Owl carousel css-->
<link rel="stylesheet" href="onboarding/css/owl.carousel.min.css">
<link rel="stylesheet" href="onboarding/css/owl.theme.default.min.css">
<!--custom css-->
<link rel="stylesheet" href="onboarding/css/style.css">
<!--responsive css-->
<link rel="stylesheet" href="onboarding/css/responsive.css">

</head>
<body>

<!--loader start-->
<div id="preloader">
<div class="loader1">
<span></span>
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</div>
<!--loader end-->

<!--body content wrap start-->
<div class="main">

<!--hero section start-->
<section class="hero-section full-screen gray-light-bg">
<div class="container-fluid">
<div class="row align-items-center justify-content-center">

<div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
<!-- Image -->
<div class="bg-cover vh-100 ml-n3 gradient-overlay" style="background-image: url(onboarding/img/slider-img-5.jpg);">
<div class="position-absolute login-signup-content">
<div class="position-relative text-white col-md-12 col-lg-7">
<h2 class="text-white">Hello Admin!</h2>
<p style="text-align:justify;">You are about to visit NixWhistle Admin Channel. You will be able to manage onboarding Processes and Other Administrative Works Here. Please use secure channel to visit. Do not share your credentials with anyone.</p>
</div>
</div>
</div>
</div>
<div class="col-12 col-md-6 col-lg-6 col-xl-4">
<div class="login-signup-wrap px-4 px-lg-5 my-5">
<!-- Heading -->
<h1 class="text-center mb-1">
Admin Sign In
</h1>
<p class="text-center mb-5">
Welcome to Nixwhistle Management
</p>

<!--login form-->
<form class="login-signup-form" method="post" action="admin_dashboard">
<div class="form-group">
<label class="pb-1"><strong>Username:</strong></label>
<div class="input-group input-group-merge">
<div class="input-icon">
<span class="ti-email color-primary"></span>
</div>
<input type="text" name="username" class="form-control" placeholder="Enter Admin Username">
</div>
</div>
<!-- Password -->
<div class="form-group">
<div class="row">
<div class="col">
<label class="pb-1"><strong>Password:</strong></label>
</div>
<div class="col-auto">
<a href="#" class="form-text small text-muted">
Forgot password?
</a>
</div>
</div>
<div class="input-group input-group-merge">
<div class="input-icon">
<span class="ti-lock color-primary"></span>
</div>
<input type="password" name="password" class="form-control" placeholder="Enter your password">
</div>
</div>

<!-- Submit -->
<button class="btn btn-lg btn-block solid-btn border-radius mt-4 mb-3" name="submit" type="submit">
Sign in
</button>

<!-- Link -->
<!-- <p class="text-center">
<small class="text-muted text-center">
Don't have an account yet? <a href="sign-up.html">Sign up</a>.
</small>
</p> -->

</form>
</div>
</div>
</div> <!-- / .row -->
</div>
</section>
<!--hero section end-->

</div>
<!--body content wrap end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
<span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->

<!--jQuery-->
<script src="onboarding/js/jquery-3.4.1.min.js"></script>
<!--Popper js-->
<script src="onboarding/js/popper.min.js"></script>
<!--Bootstrap js-->
<script src="onboarding/js/bootstrap.min.js"></script>
<!--Magnific popup js-->
<script src="onboarding/js/jquery.magnific-popup.min.js"></script>
<!--jquery easing js-->
<script src="onboarding/js/jquery.easing.min.js"></script>
<!--jquery ytplayer js-->
<script src="onboarding/js/jquery.mb.YTPlayer.min.js"></script>
<!--Isotope filter js-->
<script src="onboarding/js/mixitup.min.js"></script>
<!--wow js-->
<script src="onboarding/js/wow.min.js"></script>
<!--owl carousel js-->
<script src="onboarding/js/owl.carousel.min.js"></script>
<!--countdown js-->
<script src="onboarding/js/jquery.countdown.min.js"></script>
<!--custom js-->
<script src="onboarding/js/scripts.js"></script>
</body>
</html>


<!-- section for admin credentials and login starts here -->

<?php 
if(isset($_POST['submit']))
{

$admin_username = $_POST['username'];
$admin_password = $_POST['password'];

$admin_username = stripcslashes($admin_username);
$admin_username = mysqli_real_escape_string($db_connection,$admin_username);
$admin_password = stripcslashes($admin_password);
$admin_password = mysqli_real_escape_string($db_connection,$admin_password);

$sql = "SELECT * FROM admin_management WHERE admin_username = '$admin_username' and admin_password = '$admin_password'";

$result = mysqli_query($db_connection,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1)
{
	echo "<script>alert('User Found, Login Successful')</script>";
}
else
{
	echo "<scrip>alert('Login Failed User Not Found')</script>";
}

}

?>

<!-- section for admin credentials and login starts here -->