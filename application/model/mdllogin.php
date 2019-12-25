<?php

class mdllogin
{

private $_Usuario;


public function __SET($atributo,$valor){
  $this->$atributo = $valor;
}

public function __GET($atributo){
  return $this->$atributo;
}

    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

  public function access(){
  $sql = "SELECT id_usuario, id_perfil, estado, nombre, apellido, email, telefono2, username, password,passwordsalt,tokenregistro, confirmacioncorreo FROM usuarios WHERE username = ?  ";
  $stm=$this->db->prepare($sql);
  $stm->bindValue(1, $this->__GET("_Usuario"));
  $stm->execute();
  return $stm->fetch(PDO::FETCH_ASSOC);

}

public function registar($nombre,$apellido,$usuario,$correo,$telefono,$pass,$salt,$token)
{
  $sql= "INSERT INTO usuarios (nombre,apellido,username,email,telefono2,password,passwordsalt,tokenregistro,id_perfil,estado,fechacreacion) VALUES (?,?,?,?,?,?,?,?,5,2,now())";
  $stm=$this->db->prepare($sql);
  $stm->bindValue(1,$nombre);
  $stm->bindValue(2,$apellido);
  $stm->bindValue(3,$usuario);
  $stm->bindValue(4,$correo);
  $stm->bindValue(5,$telefono);
  $stm->bindValue(6,$pass);
  $stm->bindValue(7,$salt);
  $stm->bindValue(8,$token);
  $stm->execute();

}


public function validacion($usuario){
$sql = "SELECT id_usuario FROM usuarios WHERE username = ?  ";
$stm=$this->db->prepare($sql);
$stm->bindValue(1,$usuario);
$stm->execute();
// return $stm->fetch(PDO::FETCH_ASSOC);
// $result = $stm->fetch(PDO::FETCH_ASSOC);
if ($stm->rowCount() > 0)
{
return true;

}else {
return false;
}

}



}
