
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Ingreso | Pa'Ya</title>
<meta name="author" content="">

<script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/9014afdb/cloudflare-static/rocket.min.js"></script>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />


 <link href="<?php echo URL ;?>css/materialize.css" rel="stylesheet"  />
<link href="<?php echo URL ;?>font-awesome/css/font-awesome.css" rel="stylesheet"  />
<link href="<?php echo URL ;?>css/prettify.css" rel="stylesheet"  />
<link href="<?php echo URL ;?>css/login.css" rel="stylesheet"  />



<!-- <link href="<?php echo URL ;?>css/light.css" id="ssThemeColor" rel="stylesheet"  /> -->
<link href="<?php echo URL ;?>css/amber.css" id="ssMainColor" rel="stylesheet"   />
<link href="<?php echo URL ;?>css/red.css" id="ssAlternativeColor" rel="stylesheet"  />



<link href="<?php echo URL ;?>css/theme-switcher.css" rel="stylesheet"  />
<script src="<?php echo URL ;?>js/jquery.js"></script>

</head>
<style>
body {
 background-image: url("<?php echo URL; ?>img/home-bg.jpg");
 background-position: center center;
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-size: cover;

}
</style>
<body>
<div id="theme-gradient"></div>



<main>
<div class="login-wrapper">
<form action="<?php echo URL;?>Login/Access" method="post">
<div class="panel panel-bordered z-depth-1">
<div class="panel-header">
<h5>
Ingreso <b class="main-text">Pa'Ya</b>
</h5>
</div>
<div class="panel-body">
<div class="row ">
<div class="input-field col s12">
<input type="text" name="txtusername" id="txtusername" required>
<label for="txtusername">Usuario</label>
</div>
</div>
<div class="input-field col s12">
<input type="password" name="txtpassword" id="txtpassword" required>
<label for="txtpassword">Contraseña</label>
</div>
<!-- <div class="remember-forgot-wrapper">
<p class="remember-me">
<input type="checkbox" name="remember" id="remember">
<label for="remember">Remember me</label>
</p>
<p class="forgot-password">
<a href="forgot_password.html">
<i class="material-icons">lock</i>
Forgot password
</a>
</p>
</div> -->
</div>
<div class="panel-footer">
<div class="right-align">
<a href="<?php echo URL;?>home/Registro" class="btn-flat waves-effect">
REGISTRO
</a>
<button type="submit" class="btn-flat waves-effect">
INGRESAR
</button>
</div>
</div>
</div>
</form>
</div>
</main>



<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="<?php echo URL ;?>js/prettify.js"> </script>
<script src="<?php echo URL ;?>js/admin.js"></script>



<script src="<?php echo URL ;?>js/utils.js"></script>
<script src="<?php echo URL ;?>js/colors.js"></script>
<!-- <script src="<?php echo URL ;?>js/theme-switcher.js"></script>  -->



<script src="<?php echo URL ;?>js/amcharts.js"></script>
<script src="<?php echo URL ;?>js/serial.js"></script>
<script src="<?php echo URL ;?>js/gauge.js"></script>
<script src="<?php echo URL ;?>js/light.js"></script>
<script src="<?php echo URL ;?>js/jquery.slimscroll.js"></script>
<script src="<?php echo URL ;?>js/dashboard.js"></script>
</body>
</html>
