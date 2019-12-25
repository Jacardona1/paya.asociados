<?php

class Administrador extends Controller
{

  private $model = null;

  function __construct(){
    $this->model = $this->loadModel("mdladministrador");
  }

    public function index()
    {
      require APP . 'view/_templates/header.php';
      require APP . 'view/administrador/index.php';
      require APP . 'view/_templates/footer.php';
    }

    public function perfil()
    {
      $id = $_SESSION["Cod"];
      $datos = $this->model->DatosUsuario($id);
      $equipo = $this->model->DatosVehiculo($id);
      $colores = $this->model->colores();
      $marcas = $this->model->marcas();
      $modelos = $this->model->modelos();
      $tipos= $this->model->tipos();
      require APP . 'view/_templates/header.php';
      require APP . 'view/administrador/perfil.php';
      require APP . 'view/_templates/footer.php';
    }

    public function modificar()
    {
      $tipo_documento = $_POST["tipo_documento"];
      $documento = $_POST["documento"];
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido"];
      $usuario = $_POST["usuario"];
      $correo = $_POST["email"];
      $telefono = $_POST["telefono"];
      $conductor = $_SESSION["Cod"];
      $direccion = $_POST["direccion"];
      $genero = $_POST["genero"];
      $this->model->modificar($tipo_documento,$documento,$nombre,$apellido,$usuario,$correo,$telefono,$conductor,$direccion,$genero);
      header('location:'.URL.'Administrador/perfil');

    }

    public function RegistroVehiculo()
    {
      $ruta = URL_SERVER."/".$_SESSION["Cod"];
      if(!file_exists($ruta)){
        mkdir($ruta,0755,true);
      }
      $tipo_equipo = $_POST["tipo_equipo"];
      $tipo_modelo = $_POST["tipo_modelo"];
      $tipo_color = $_POST["tipo_color"];
      $tipo_marca = $_POST["tipo_marca"];
      $placa = $_POST["placa"];
      $conductor = $_SESSION["Cod"];
      if($_FILES['matricula']){
        move_uploaded_file($_FILES['matricula']['tmp_name'],$ruta."/matricula.jpg");
      }
      if($_FILES['soap']){
        move_uploaded_file($_FILES['soap']['tmp_name'],$ruta."/soap.jpg");
      }
      if($_FILES['tecnomecanica']){
        move_uploaded_file($_FILES['tecnomecanica']['tmp_name'],$ruta."/tecnomecanica.jpg");
      }
      $this->model->registrovehiculo($tipo_equipo,$tipo_modelo,$tipo_color,$tipo_marca,$placa,$conductor);
      header('location:'.URL.'Administrador/perfil');
    }

    public function ModificarVehiculo()
    {
      $tipo_equipo = $_POST["tipo_equipo"];
      $tipo_modelo = $_POST["tipo_modelo"];
      $tipo_color = $_POST["tipo_color"];
      $tipo_marca = $_POST["tipo_marca"];
      $placa = $_POST["placa"];
      $c = $_POST["placa"];
      $this->model->modificarvehiculo($tipo_equipo,$tipo_modelo,$tipo_color,$tipo_marca,$placa,$c);
      header('location:'.URL.'Administrador/perfil');
    }



    }


 ?>
