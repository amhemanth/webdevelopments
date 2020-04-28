<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
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
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
  <?php require 'header.php'; ?>
  <div class="inner-banner2" id="home">
    <div class="container">
    </div>
  </div>
<div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="./api/user/login2.php" method="GET">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="./api/user/signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
<style media="screen">
.pad{
  padding: 25px,25px,25px,25px
}
</style>
<div class="pad">
  <p style="text-align:center;">Let's begin our beautiful journey!!!</p>
</div>
<?php require 'footer.php'; ?>

</body>
</html>
