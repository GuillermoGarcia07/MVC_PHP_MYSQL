<?php
class rutas{

	public static function cargarContenido($controlador, $accion){
		if(file_exists("Controlador/".$controlador."_controlador.php")){
			require_once "Controlador/".$controlador."_controlador.php";
			$clase = $controlador."_controlador";
			if(class_exists($clase)){
				$i = new $clase();	
				if(method_exists($i, $accion)){
					$i->$accion();
				}else{
					echo "<br>No existe accion/metodo";
				}
			}else{
					echo "<br>No existe la clase";	
			}
		}else{
			echo "<br>No existe el controlador<br>";
		}
	}	
}