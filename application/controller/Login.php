<?php

class Login extends Controller
{

  private $model = null;

  function __construct(){
    $this->model = $this->loadModel("mdllogin");
  }

    public function Access()
    {
      $this->model->__SET("_Usuario",$_POST["txtusername"]);
      $user = $this->model->access();
      var_dump($user);
      if ($user != false ) {
        $pass = md5(staticSalt.$_POST["txtpassword"].$user["passwordsalt"]);
        if ($user["password"] == $pass) {
          if ($user["id_perfil"] == 5) {
              $_SESSION["Cod"] = $user["id_usuario"];
              $_SESSION["Estado"] = $user["estado"];
              $_SESSION["Nombre"] = $user["nombre"];
              $_SESSION["Apellido"] = $user["apellido"];
              $_SESSION["Email"] = $user["email"];
              $_SESSION["Celular"] = $user["telefono2"];
              $_SESSION["Usuario"] = $user["username"];

              header('location:'.URL.'Administrador/perfil');
        }else {
          header('location:'.URL );
          }
        }else {
        header('location:'.URL );
        }
      }else {
        header('location:'.URL );
      }

    }

    public function close()
    {
      session_destroy();
      unset($_SESSION["Cod"]);
      unset($_SESSION["Estado"]);
      unset($_SESSION["Nombre"]);
      unset($_SESSION["Apellido"]);
      unset($_SESSION["Email"]);
      unset($_SESSION["Celular"]);
      unset($_SESSION["Usuario"]);
      unset($_SESSION["Latitude"]);
      unset($_SESSION["Longitude"]);
      header('location:'.URL );

    }

    public function registro()
    {
      $salt = "";
      for ($i = 0; $i < 50; ++$i) {
            $salt .= chr(rand(33, 126));
        }
      $token = md5(uniqid(mt_rand(), true));
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $usuario = $_POST["usuario"];
      $correo = $_POST["correo"];
      $telefono = $_POST["telefono"];
      $password = $_POST["password"];
      $pass = md5(staticSalt.$password.$salt);
      $this->model->registar($nombre,$apellido,$usuario,$correo,$telefono,$pass,$salt,$token);
      header('location:'.URL );

    }

  public function ValidarUsuario()
{
  $usuario = $_POST["usuario"];
  $resultado = $this->model->validacion($usuario);
  if ($resultado) {
    echo "usuario";
  }else {
    echo "validado";
  }


}


}

 ?>
