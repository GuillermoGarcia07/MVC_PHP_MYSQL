</br>
<h2 style="text-align:center">Listado De Clientes</h2> <br>
<a class="btn btn-success" href="?controlador=clientes&accion=frmRegistrar">Nuevo Cliente</a>
<table class="table table-bordered">
  <thead >
    <tr clas="table-light" id ="fila">
      <th  scope="col">ID</th>
      <th  scope="col">Nombres</th >
      <th  scope="col">Apellidos</th >
      <th  scope="col">Ciudad</th >
      <th  scope="col">Correo</th >
      <th  scope="col">Acciones</th>
    </tr>
</thead>
    <?php
      foreach($this->datos as $a){
        // $ID = $a["ID"];
           echo "<tr>";
           echo "<td >".$a["ID"]."</td>";
           echo "<td>".$a["NOMBRES"]."</td>";
           echo "<td>".$a["APELLIDOS"]."</td>";
           echo "<td>".$a["CIUDAD"]."</td >";
           echo "<td>".$a["CORREO"]."</td>";
           echo "<td><a href='?controlador=clientes&accion=FrmEditar&id=$ID' class='btn btn-warning'>Editar</a>
           <a id='EliminarCliente' href='?controlador=clientes&accion=EliminarCliente&id=$ID' class='btn btn-danger'>Eliminar</a</td>";
        echo "</tr>";
      }
    ?>
 </table>