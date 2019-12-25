<?php

class mdladministrador
{

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

    public function DatosUsuario($id)
    {
      $sql="SELECT U.estado, U.nombre, U.apellido, U.email, U.telefono2, U.username, U.password, U.documento, U.id_tipodocumento, U.fechacreacion, E.nombre AS estado, U.direccion,U.id_sexo FROM usuarios U INNER JOIN estados E ON U.estado = E.id_estado WHERE U.id_usuario = ?";
      $stm=$this->db->prepare($sql);
      $stm->bindValue(1,$id);
      $stm->execute();
      return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function DatosVehiculo($id)
    {
      $sql="SELECT E.placa, T.nombre AS tipoequipo, M.nombre AS modelo, C.nombre AS color, 	L.nombre AS marca, S.nombre AS estado FROM equipos E INNER JOIN tipo_equipos T ON E.id_tipoequipo = T.id_tipoequipo INNER JOIN modelos M ON E.id_modelo = M.id_modelo INNER JOIN colores C ON E.id_color = C.id_color INNER JOIN marcas  L ON E.id_marca = L.id_marca
      INNER JOIN estados S ON E.estado = S.id_estado  WHERE E.id_conductor = ?";
      $stm=$this->db->prepare($sql);
      $stm->bindValue(1,$id);
      $stm->execute();
      return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function mirar($id)
    {
      $sql="SELECT id_equipo FROM equipos  WHERE id_conductor = ?";
      $stm=$this->db->prepare($sql);
      $stm->bindValue(1,$id);
      $stm->execute();
      return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function modificar($tipo_documento,$documento,$nombre,$apellido,$usuario,$correo,$telefono,$conductor,$direccion,$genero)
    {
      $sql="UPDATE usuarios SET nombre = ?, apellido = ?, username = ?, email = ?, telefono2 = ?, id_tipodocumento = ?, documento = ?, direccion = ?, id_sexo = ? WHERE id_usuario = ?";
      $stm=$this->db->prepare($sql);
      $stm->bindValue(1,$nombre);
      $stm->bindValue(2,$apellido);
      $stm->bindValue(3,$usuario);
      $stm->bindValue(4,$correo);
      $stm->bindValue(5,$telefono);
      $stm->bindValue(6,$tipo_documento);
      $stm->bindValue(7,$documento);
      $stm->bindValue(8,$direccion);
      $stm->bindValue(9,$genero);
      $stm->bindValue(10,$conductor);
      $stm->execute();

    }

    public function colores()
    {
      $sql="SELECT * FROM colores";
      $stm=$this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchALL(PDO::FETCH_ASSOC);
    }

    public function marcas()
    {
      $sql="SELECT * FROM marcas";
      $stm=$this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchALL(PDO::FETCH_ASSOC);
    }

    public function modelos()
    {
      $sql="SELECT * FROM modelos";
      $stm=$this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchALL(PDO::FETCH_ASSOC);
    }

   public function tipos()
    {
      $sql="SELECT * FROM tipo_equipos";
      $stm=$this->db->prepare($sql);
      $stm->execute();
      return $stm->fetchALL(PDO::FETCH_ASSOC);
    }



    public function registrovehiculo($tipo_equipo,$tipo_modelo,$tipo_color,$tipo_marca,$placa,$conductor)
    {
      $sql= "INSERT INTO equipos (id_tipoequipo,id_modelo,id_color,id_marca,placa,id_conductor,estado) VALUES (?,?,?,?,?,?,2)";
      $stm=$this->db->prepare($sql);
      $stm->bindValue(1,$tipo_equipo);
      $stm->bindValue(2,$tipo_modelo);
      $stm->bindValue(3,$tipo_color);
      $stm->bindValue(4,$tipo_marca);
      $stm->bindValue(5,$placa);
      $stm->bindValue(6,$conductor);
      $stm->execute();
    }

    public function modificarvehiculo($tipo_equipo,$tipo_modelo,$tipo_color,$tipo_marca,$placa,$c)
    {
      $sql="UPDATE equipos SET id_tipoequipo = ?, id_modelo = ?, id_color = ?, id_marca = ?, placa = ? WHERE placa = ?";
      $stm=$this->db->prepare($sql);
      $stm->bindValue(1,$tipo_equipo);
      $stm->bindValue(2,$tipo_modelo);
      $stm->bindValue(3,$tipo_color);
      $stm->bindValue(4,$tipo_marca);
      $stm->bindValue(5,$placa);
      $stm->bindValue(6,$c);
      $stm->execute();
    }







}
