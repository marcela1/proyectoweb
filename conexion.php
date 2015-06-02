<?php
//Conectarse y seleccionar base de datos 
$error = "false";
$link =mysql_connect("localhost","Marcela","12nose");
	if($link){
		mysql_select_db("proyecto",$link) ;
	}
	else 
		echo "Fallo la conexion a la Base de Datos";

	if (isset($_POST["cautiverio"])  && !empty($_POST['cautiverio'])) {
      	$cautiverio=$_POST["cautiverio"]; }
      	else $error = "true";
      	# code...
      
       if (isset($_POST["sabes"])  && !empty($_POST['sabes'])) {
      	$sabes=$_POST["sabes"];}
      	else $error = "true";
      
      	# code...
      
       if (isset($_POST["sabes1"])  && !empty($_POST['sabes1'])) {
      	$sabes1=$_POST["sabes1"];}
      	else $error = "true";
      
      	# code...
      
       if (isset($_POST["aleta"])  && !empty($_POST['aleta'])) {
      	$aleta=$_POST["aleta"];}
      	else $error = "true";
      
      	# code...
      
       if(isset($_POST["años"])  && !empty($_POST['años'])) {
        $años = $_POST['años'] ;}
        else $error = "true";
      
      if ($error == "false"){
        $que = "INSERT INTO encuesta (pregunta1, pregunta2,pregunta3,pregunta4,pregunta5) "; 
		$que.= "VALUES ('".$cautiverio."', '".$sabes."', '".$sabes1."','".$aleta."','".$años."') "; 
		$res = mysql_query($que, $link) or die(mysql_error()); 
		mysql_close($link);
		echo "Registro finalizado con exito";

		 }
		else {
			echo "Error al registrar los datos, Favor de revisar los campos.";
			mysql_close($link);
		}

?>