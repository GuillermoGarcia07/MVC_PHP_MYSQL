<div id="contenedor">
  <form action="?controlador=clientes&accion=EditarCliente" method="post" id="frmEcliente">
     <br><div class="col-lg-3">
        <h2 id="tituloUsuario">Actualizar Datos</h2>
           <input type="hidden" name="id" id ="id" class="form-control" value= "<?php echo $this->datos["ID"]?>"></input><br/>
           <input type="text" name="nombres"id ="nombres"class="form-control" value= "<?php echo $this->datos["NOMBRES"]?>"></input><br/>
           <input type="text" name="apellidos"id ="apellidos"class="form-control" value= "<?php echo $this->datos["APELLIDOS"]?>"></input><br/>
           <input type="text" name="ciudad" id ="ciudad" class="form-control" value= "<?php echo $this->datos["CIUDAD"]?>"></input><br/>
           <input type="email" name="correo" id ="correo" class="form-control" value= "<?php echo $this->datos["CORREO"]?>"></input><br/>
           <input type="submit" id = "Ecliente"class="btn btn-primary"name="registrar" value="Actualizar"></input>
     </div>
   </div>
</form>