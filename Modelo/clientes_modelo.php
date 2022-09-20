<?php
 class clientes_modelo{
      public static function Registrar_Clientes($datos){
          $o   = new conexion();
          $c   = $o->conectarse();
          $sql = "INSERT INTO clientes (NOMBRES, APELLIDOS, CIUDAD, CORREO)
                                 VALUES(?,        ?,           ?,       ?)";
          $s   = $c->prepare($sql);   
          $v   = array($datos["nombres"], $datos["apellidos"], $datos["ciudad"], $datos["correo"]);
          return $s->execute($v); 
       }
      public static function Listar_Clientes(){
          $o   = new conexion();
          $c   = $o->conectarse();
          $sql = "SELECT * FROM clientes";
          $s   = $c->prepare($sql);
          $s->execute();
          $datos = $s->fetchAll();
          return $datos;
       }
       public static function Eliminar_Clientes($id){
          $o   = new conexion();
          $c   = $o->conectarse();
          $sql = "DELETE FROM clientes WHERE ID = ?";
          $s   = $c->prepare($sql);
          $v   = array($id);
          $r   = $s->execute($v);
          return $r;
       }
       public static function Consultar_Cliente($id){
          $o   = new conexion();
          $c   = $o->conectarse();
          $sql = "SELECT * FROM clientes WHERE ID = ?";
          $s   = $c->prepare($sql);
          $s->execute(array($id));
          $datos = $s->fetch();
          return $datos;

       }
       public static function Editar_Cliente($datos){
          $o   = new conexion();
          $c   = $o->conectarse();
          $sql = "UPDATE clientes SET NOMBRES = ?, APELLIDOS = ?, 
          CIUDAD = ?, CORREO = ? WHERE ID = ?";
          $s   = $c->prepare($sql);
          $v   = array($datos["nombres"],$datos["apellidos"],$datos["ciudad"],$datos["correo"],$datos["id"]);
          $r   = $s->execute($v);
          return $r;
       }
}