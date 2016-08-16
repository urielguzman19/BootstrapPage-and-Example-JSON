<?php
 $conexion = mysqli_connect('localhost','root','','pruebas');

 if(isset($_REQUEST['Registrar'])){

  //Capturamos los datos ingresados por el usuario en Variables
  $Nick = $_REQUEST['nick'];
  $Consola = $_REQUEST['consola'];
  $Calificacion = $_REQUEST['calificacion'];
 

   $registro ="INSERT INTO calificaciones (nick,consola,calificacion)
                VALUES('".$Nick."','".$Consola."','".$Calificacion."')";

  /*Manda a guardar los datos a la BD*/
  mysqli_query($conexion,$registro);
 }
// echo $Nick." ".$Consola." ".$Calificacion


if ($_POST['Registrar']){
    /*isset() determina si una variable está definida y no es NULL.*/
    /*!isset -> Si variable no esta definida y no es NULL*/
	if (!isset($Nick, $Consola, $Calificación)) {
        echo "<script language='javascript'>
        alert('Registro aceptado, muchas gracias.');
        window.location.href = 'evalJuego.html';
        </script>";  
       
     } else {
        echo 'Falló el registro';
     }
}
 
 

?>