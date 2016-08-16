<?php 
 
//Creamos la conexión a la base de Datos
 $conexion= mysqli_connect("localhost","root","","pruebas")
  or die("Error inexperado en la conexion a labase de datos MySQL");
 
 //generamos la consulta
 $query = "SELECT *FROM calificaciones";
 mysqli_set_charset($conexion,"utf8");

 /*Guarda en una variable los datos encontrados por la consulta, 
  si el query no encuentra datos se cierra*/
 if(!$resultado = mysqli_query($conexion, $query))
 	die();

 $calificaciones =array();

/*Agrega al array los datos encontrados por la consulta guardados
  en la variable $calificaciones */
    while ($row = mysqli_fetch_array($resultado)) {
	$nick = $row['nick'];
	$consola = $row['consola'];
	$calificacion = $row['calificacion'];
        
   /*Se guardan los datos encontrados por el query en el array de nombre $calificaciones*/  
	$calificaciones[] = array('nick'=>$nick, 'consola'=>$consola,'calificacion'=>$calificacion);

}

//desconectamos de la base de datos
$close = mysqli_close($conexion)
or die ("Ha sucedido un error inexperado en la desconexion de la base de datos");


/*Creamos el objeto JSON con el arreglo $pokemon
 el cual contiene los datos encontrados por el query */
$json_string = json_encode($calificaciones);
echo $json_string;

 ?>