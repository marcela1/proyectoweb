<?php 
       $Nom = $_POST['Nom'];
       echo"Nombre: ".$Nom."<br>";

      if (isset($_POST["sexo"])) {
      	$sexo=$_POST["sexo"];
      	echo "sexo: ".$sexo."<br>";
      	# code...
      }
       if (isset($_POST["cautiverio"])) {
      	$cautiverio=$_POST["cautiverio"];
      	echo "Pregunta 1: ".$cautiverio."<br>";
      	# code...
      }
       if (isset($_POST["sabes"])) {
      	$sabes=$_POST["sabes"];
      	echo "Pregunta 2: ".$sabes."<br>";
      	# code...
      }
       if (isset($_POST["sabes1"])) {
      	$sabes1=$_POST["sabes1"];
      	echo "Pregunta 3: ".$sabes1."<br>";
      	# code...
      }
       if (isset($_POST["aleta"])) {
      	$aleta=$_POST["aleta"];
      	echo "Pregunta 4: ".$aleta."<br>";
      	# code...
      }
        $años = $_POST['años'];
       echo"Pregunta 5: ".$años."<br>";
?>