<?php
require_once "Modelo/clientes_modelo.php";

class clientes_controlador{

	 public function __construct(){
		$this->vista = new vista();
	 }

     public function index(){
        $this->vista->unirContenido("clientes/index");
     }

     public function frmRegistrar(){
        $this->vista->unirContenido("clientes/frmRegistrar");
     }

     public function listadoClientes(){
        $this->vista->datos = clientes_modelo::Listar_Clientes();
        $this->vista->unirContenido("clientes/tablaListar");
     }

     public function RegistrarClientes(){
        $datos = $_POST;
        $respuesta = clientes_modelo::Registrar_Clientes($datos);
        if($respuesta > 0){
            $mensaje = "¡ Registrado Correctamente !";
        }else{
            $mensaje = "Error Al Registrar";
        }
        echo json_encode(array("mensaje" => $mensaje));
     }

    public function EditarCliente(){
         $datos  =$_POST;
         $r      = clientes_modelo::Editar_Cliente($datos);
         if($r > 0){
            $mensaje = "Actualizado Correctamente";
         }else{
            $mensaje = "Error Al Actualizar";
         }
         echo json_encode(array("mensaje" => $mensaje));
     } 
     public function FrmEditar(){
        $id = $_GET["id"];
        $this->vista->datos = clientes_modelo::Consultar_Cliente($id);
        $this->vista->unirContenido("clientes/frmEditar");
     }
     public function EliminarCliente(){
        $id = $_GET["id"];
        $r  = clientes_modelo::Eliminar_Clientes($id);
        if($r > 0){
         $mensaje = "Usuario Eliminado";
        }else{
         $mensaje = "Error Al Eliminar";
        }
        echo json_encode(array("mensaje" => $mensaje));
   }
}