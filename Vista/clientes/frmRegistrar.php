<div id="contenedor">
  <form action="?controlador=clientes&accion=RegistrarClientes" method="post" id="frmRUsuario">
     <br><div class="col-lg-3">
        <h2 id="tituloUsuario">Registrar Cliente</h2>
           <input type="text" name="nombres"id ="nombres"class="form-control" placeholder="Digite Nombres"></input><br/>
           <input type="text" name="apellidos"id ="apellidos"class="form-control" placeholder="Digite Apellidos"></input><br/>
           <input type="text" name="ciudad" id ="ciudad" class="form-control" placeholder="Digite Ciudad"></input><br/>
           <input type="email" name="correo" id ="correo" class="form-control"placeholder="Digite Correo"></input><br/>
           <input type="submit" class="btn btn-primary"name="registrar" value="Registrar"></input>
     </div>
   </div>
</form>