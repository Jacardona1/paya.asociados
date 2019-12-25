<link href="<?php echo URL ;?>css/profile.css" rel="stylesheet"  />

<section id="profile">
<div class="row">



<div class="col s12 m4">
<div class="panel panel-bordered panel-about panel-bar-chart z-depth-1">
<div class="panel-body">
<img src="<?php echo URL;?>img/asociado.png" class="circle">
<div class="name"><?php echo ucfirst($_SESSION["Nombre"])." ".ucfirst($_SESSION["Apellido"]);?></div>
<!-- <div class="location">Activo</div> -->
<div class="margin-25">
<p><strong style="color:black">Estado Usuario: </strong><?php echo $datos["estado"]?></p>
<p><strong style="color:black">Estado Vehiculo: </strong><?php if ($equipo == false) {
echo "No Hay Registro";
}else {
  echo $equipo["estado"];
}?></p>
<p><strong style="color:black">Fecha de Registro: </strong><?php echo $datos["fechacreacion"]?></p>
</div>
</div>
</div>

<ul class="collapsible popout collapsible-accordion" data-collapsible="accordion">

<li>
<div class="collapsible-header active"><i class="material-icons">motorcycle</i>Equipo</div>
<div class="collapsible-body">
  <div class="row">
    <br>
    <?php
    if ($equipo == false) {
    echo "<form action='".URL."Administrador/RegistroVehiculo' method='post' enctype='multipart/form-data'>";
    }else {
      echo "<form action='".URL."Administrador/ModificarVehiculo' method='post' enctype='multipart/form-data'>";  }
    ?>

  <div class="row">
    <div class="input-field col s6">
      <select id="tipo_equipo" name="tipo_equipo" class="validate">
        <option value="" disabled <?php if ($equipo == false) {echo "selected=''";}?>>Selecionar Tipo</option>
        <!-- <option value="1" <?php if ($equipo["tipoequipo"] == 1) {echo "selected=''";}?>>DEFAULT</option> -->
        <?php foreach ($tipos as $tipo): ?>
          <option value="<?php echo $tipo["id_tipoequipo"]?>" <?php if ($equipo["tipoequipo"] ==  $tipo["nombre"]) {echo "selected=''";}?>><?php echo $tipo["nombre"]?></option>
        <?php endforeach; ?>
      </select>
      <label for="tipo_equipo">Tipo de equipo</label>
    </div>
    <div class="input-field col s6">
      <select id="tipo_modelo" name="tipo_modelo" class="validate">
        <option value="" disabled <?php if ($equipo == false) {echo "selected=''";}?>>Selecionar Modelo</option>
        <!-- <option value="1" <?php if ($equipo["modelo"] == 1) {echo "selected=''";}?>>2000</option>
        <option value="2" <?php if ($equipo["modelo"] == 2) {echo "selected=''";}?>>2001</option>
        <option value="3" <?php if ($equipo["modelo"] == 3) {echo "selected=''";}?>>2002</option>
        <option value="4" <?php if ($equipo["modelo"] == 4) {echo "selected=''";}?>>2003</option>
        <option value="5" <?php if ($equipo["modelo"] == 5) {echo "selected=''";}?>>2004</option> -->
        <?php foreach ($modelos as $modelo): ?>
          <option value="<?php echo $modelo["id_modelo"]?>" <?php if ($equipo["modelo"] == $modelo["nombre"]) {echo "selected=''";}?>><?php echo $modelo["nombre"]?></option>
        <?php endforeach; ?>
      </select>
      <label for="tipo_modelo">Modelo</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s6">
      <select id="tipo_color" name="tipo_color" class="validate">
        <option value="" disabled <?php if ($equipo == false) {echo "selected=''";}?>>Selecionar Color</option>
        <?php foreach ($colores as $color): ?>
          <option value="<?php echo $color["id_color"]?>" <?php if ($equipo["color"] == $color["nombre"]) {echo "selected=''";}?>><?php echo $color["nombre"]?></option>
        <?php endforeach; ?>
        <option value="1">DEFAULT</option>
      </select>
      <label for="tipo_color">Color</label>
    </div>
    <div class="input-field col s6">
      <select id="tipo_marca" name="tipo_marca" class="validate">
        <option value="" disabled <?php if ($equipo == false) {echo "selected=''";}?>>Selecionar Marca</option>
        <?php foreach ($marcas as $marca): ?>
          <option value="<?php echo $marca["id_marca"]?>" <?php if ($equipo["marca"] == $marca["nombre"]) {echo "selected=''";}?>><?php echo $marca["nombre"]?></option>
        <?php endforeach; ?>
      </select>
      <label for="tipo_marca">Marca</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <input id="placa" type="text" name="placa" class="validate" value="<?php if ($equipo == false) {echo "";}else{echo $equipo["placa"];}?>" >
      <label for="usuario">Placa</label>
    </div>
  </div>

      <div class="row">
          <div class="input-field col s12">
              <h5>Matricula Vehiculo</h5>
          </div>
          <div class="file-field input-field col s12">
              <div class="btn">
                  <span>CARGAR</span>
                  <input type="file" name="matricula">
              </div>
              <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
              </div>
          </div>
      </div>

      <div class="row">
          <div class="input-field col s12">
              <h5>SOAP</h5>
          </div>
          <div class="file-field input-field col s12">
              <div class="btn">
                  <span>CARGAR</span>
                  <input type="file" name="soap">
              </div>
              <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
              </div>
          </div>
      </div>

      <div class="row">
          <div class="input-field col s12">
              <h5>Tecnomecanica</h5>
          </div>
          <div class="file-field input-field col s12">
              <div class="btn">
                  <span>CARGAR</span>
                  <input type="file" name="tecnomecanica">
              </div>
              <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
              </div>
          </div>
      </div>


      <div class="row">
      <div class="input-field col s12">
        <center>  <center>
        <button type="sudmit" name="button" class="btn small" style="background-color: #26a69a;">Enviar</button></center>
      </div>
  </div>

</form>
</div>


</div>
</li>

</ul>


</div>

<div class="col s12 m8">

  <!-- <div class="col s12">
  <div class="card-panel alternative lighten-1 margin-top-35">
   <center>Hay Datos Faltantes!</center>
  </div>
  </div> -->
  <?php if ($equipo == false) {
    echo "
    <div class='col s12'>
    <div class='card-panel alternative lighten-1 margin-top-35'>
     <center>No hay Registro del Vehiculo!</center>
    </div>
    </div>";
  }?>
<?php
  foreach ($datos as $key ) {
    if ($key == NULL) {
      echo "
      <div class='col s12'>
      <div class='card-panel alternative lighten-1 margin-top-35'>
       <center>Hay Datos Faltantes!</center>
      </div>
      </div>";
    }
  }
 ?>
  <div class="col s12">
  <ul class="collapsible popout collapsible-accordion" data-collapsible="accordion">
  <li>
  <div class="collapsible-header active"><i class="material-icons">account_circle</i>Datos personales</div>
  <div class="collapsible-body">
    <div class="row">
      <br>
	<form action="<?php echo URL?>Administrador/modificar" method="post">
		<div class="row">
			<div class="input-field col s6">
        <select id="tipo_documento" name="tipo_documento" class="validate">
          <option value="" disabled <?php if ($datos["id_tipodocumento"] == NULL) {echo "selected=''";}?>>Selecionar Tipo</option>
          <option value="1" <?php if ($datos["id_tipodocumento"] == 1) {echo "selected=''";}?>>Cédula</option>
          <option value="2" <?php if ($datos["id_tipodocumento"] == 2) {echo "selected=''";}?>>Tarjeta Identidad</option>
          <option value="3" <?php if ($datos["id_tipodocumento"] == 3) {echo "selected=''";}?>>Pasaporte</option>

        </select>
				<label for="tipo_documento">Tipo de Documento</label>
			</div>
			<div class="input-field col s6">
				<input id="documento" name="documento" type="number" class="validate" value="<?php echo $datos["documento"]?>" >
				<label for="documento">Documento</label>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s6">
				<input id="nombre" name="nombre" type="text" class="validate" value="<?php echo $datos["nombre"]?>" >
				<label for="nombre">Nombres</label>
			</div>
      <div class="input-field col s6">
				<input id="apellido" name="apellido" type="text" class="validate" value="<?php echo $datos["apellido"]?>" >
				<label for="apellido">Apellidos</label>
			</div>
		</div>
    <div class="row">
			<div class="input-field col s6">
				<input id="email" type="email" name="email" class="validate" value="<?php echo $datos["email"]?>" >
				<label for="email">Email</label>
			</div>
      <div class="input-field col s6">
				<input id="telefono" type="number" name="telefono" class="validate" value="<?php echo $datos["telefono2"]?>" >
				<label for="telefono">Celular</label>
			</div>
		</div>

        <div class="row">
            <div class="input-field col s6">
                <input id="direccion" type="text" name="direccion" class="validate" value="<?php echo $datos["direccion"]?>" >
                <label for="direccion">Dirección</label>
            </div>
            <div class="input-field col s6">
                <select id="genero" name="genero" class="validate">
                    <option value="" disabled <?php if ($datos["id_sexo"] == NULL) {echo "selected=''";}?>>Selecionar Genero</option>
                    <option value="1" <?php if ($datos["id_sexo"] == 1) {echo "selected=''";}?>>Masculino</option>
                    <option value="2" <?php if ($datos["id_sexo"] == 2) {echo "selected=''";}?>>Femenino</option>
                </select>
            </div>
        </div>
    <div class="row">
			<div class="input-field col s12">
				<input id="usuario" type="text" name="usuario" class="validate" value="<?php echo $datos["username"]?>" >
				<label for="usuario">Usuario</label>
			</div>
		</div>
    <div class="row">
			<div class="input-field col s3 offset-s5">
				<button type="button" class="btn small" id="btn_modificar" style="background-color: #26a69a;" onclick="habilitar()">Actualizar Datos</button>
			</div>
		</div>

    <div class="row">
			<div class="input-field col s2 offset-s5">
				<button type="button" class="btn small" id="btn_cancelar" onclick="carga()">Cancelar</button>
			</div>

			<div class="input-field col s3 ">
				<button type="submit" id="btn_enviar" class="btn small" style="background-color: #26a69a;">Enviar</button>
			</div>
		</div>

	</form>
</div>
  </div>
  </li>
  </ul>
  </div>
<!-- </div> -->
</div>
</div>
</section>
<script>
carga()
function carga() {
  document.getElementById("documento").disabled = true;
  document.getElementById("nombre").disabled = true;
  document.getElementById("apellido").disabled = true;
  document.getElementById("email").disabled = true;
  document.getElementById("telefono").disabled = true;
  document.getElementById("usuario").disabled = true;

  document.getElementById("btn_modificar").style.display = "block";
  document.getElementById("btn_cancelar").style.display = "none";
  document.getElementById("btn_enviar").style.display = "none";
}
function habilitar() {

  document.getElementById("documento").disabled = false;
  document.getElementById("nombre").disabled = false;
  document.getElementById("apellido").disabled = false;
  document.getElementById("email").disabled = false;
  document.getElementById("telefono").disabled = false;
  document.getElementById("usuario").disabled = false;

  document.getElementById("btn_modificar").style.display = "none";
  document.getElementById("btn_cancelar").style.display = "block";
  document.getElementById("btn_enviar").style.display = "block";

}


</script>
