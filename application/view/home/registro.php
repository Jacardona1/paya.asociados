
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Registro | Asociados</title>
<meta name="author" content="Felippe Rodrigo Puhle">

<script type="text/javascript" src="https://ajax.cloudflare.com/cdn-cgi/scripts/9014afdb/cloudflare-static/rocket.min.js"></script>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link href="<?php echo URL; ?>css/materialize.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URL; ?>font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URL; ?>css/login.css" rel="stylesheet" type="text/css" />
<link href="<?php echo URL; ?>css/light.css" id="ssThemeColor" rel="stylesheet" type="text/css" />
<link href="<?php echo URL; ?>css/amber.css" id="ssMainColor" rel="stylesheet" type="text/css" />
<link href="<?php echo URL; ?>css/red.css" id="ssAlternativeColor" rel="stylesheet" type="text/css" />
<link href="<?php echo URL; ?>css/theme-switcher.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo URL; ?>img/favicon.ico" type="image/x-icon">

<script src="<?php echo URL; ?>js/jquery.js" type="text/javascript"></script>

</head>
<style>
body {
 background-image: url("<?php echo URL; ?>img/registro-imagen.jpeg");
 background-position: center center;
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-size: cover;
}
</style>

<body>
<!-- <div id="theme-gradient"></div> -->
<!-- <main> -->
<!-- <div class="login-wrapper" style="margin:0px;height:100%"> -->
  <div class="login-wrapper" >
<form id="registroD" action="<?php echo URL?>Login/registro" method="post">
<div class="panel panel-bordered z-depth-1">
<div class="panel-header">
<h5>
Registrate en <b class="main-text" style="color:#d3a638">Pa'Ya Asociados</b>
</h5>
</div>
<div class="panel-body">
<div class="row no-gutter margin-bottom-0">
<div class="input-field col s6">
<input type="text" name="nombre" id="nombre" required>
<label for="name">Nombres</label>
</div>

<div class="input-field col s6">
<input type="text" name="apellido" id="apellido" required>
<label for="name">Apellidos</label>
</div>
</div>

<div class="row no-gutter margin-bottom-0">
<div class="input-field col s12">
<input type="email" id="correo" name="correo" required>
<label for="email">Email</label>
</div>
</div>
<div class="row no-gutter margin-bottom-0">
<div class="input-field col s12">
<input type="number" name="telefono" id="celular" required>
<label for="telefono">Telefono</label>
</div>
</div>
<div class="row no-gutter margin-bottom-0">
<div class="input-field col s12">
<input type="text" name="usuario" id="usuario" required>
<label for="login">Usuario</label>
</div>
</div>
<div class="row no-gutter margin-bottom-0">
<div class="input-field col s12">
<input type="password" id="clave" name="password" required>
<label for="password">Contraseña</label>
</div>
</div>
<div class="row no-gutter margin-bottom-0">
<div class="input-field col s12">
<input type="password" name="confirm_password" id="confirm_password" required>
<label for="password">Confirmar Contraseña</label>
</div>
</div>
<p class="margin-bottom-10">
<input type="checkbox" name="agreet" id="agreet">
<label for="agreet">Yo Acepto Los Términos y Condiciones</label>
</p>
</div>
<div class="panel-footer">
<div class="right-align">
<a href="<?php echo URL?>" class="btn-flat waves-effect">
Ya Tengo Cuenta
</a>
<button type="button" class="btn-flat waves-effect" onclick="checkForm()">
Registrarse
</button>
</div>
</div>
</div>
</form>
</div>
<script>
function checkForm(form)
{

  var password = $("#clave").val();
  var confirmPassword = $("#confirm_password").val();

     var url = "<?php echo URL ?>Login/ValidarUsuario";
     $.ajax({
    type: "POST",
    url: url,
    data: $("#registroD").serialize()
  }).done(function (data){
    if (data == "usuario") {
      alert("Este usuario ya se encuentra registrado");
    }else if (password != confirmPassword) {
      alert("Las contraseñas no coinciden.");
    }else if (document.getElementById('agreet').checked==false) {
      alert("Indique que esta deacuerdo con los terminos y condiciones");
      console.log(data);
    }else if (data == "usuario") {
      alert("El usuario ya se encuentra registrado");
    }else {
      document.getElementById("registroD").submit();
    }

  });
 //
 // if(!form.agreet.checked) {
 //  alert("Indique que esta deacuerdo con los terminos y condiciones");
 //  form.agreet.focus();
 //  return false;
 // }else if (password != confirmPassword) {
 //     alert("Las contraseñas no coinciden.");
 //     return false;
 // }else  {
 //   return false;
 // }




}
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>



<script src="<?php echo URL; ?>js/utils.js" type="text/javascript"></script>
<!-- <script src="<?php echo URL; ?>js/colors.js" type="text/javascript"></script> -->
<script src="<?php echo URL; ?>js/theme-switcher.js" type="text/javascript"></script>
</body>
</html>
