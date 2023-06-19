<?php

include 'asistencia1.html';

    $asistencia = null;
    $calificacion = null;

define("CLASES",30);

//var_dump($_POST);

//$validacion = isset($asistencia);

//var_dump($validacion);

if(isset($_POST['calificacion'])&& isset($_POST['asistencia'])){

    $asistencia = $_POST['asistencia'];
    $calificacion = $_POST['calificacion'];

   // echo "$calificacion" <br>;
  //  echo "$asistencia";

    if($calificacion<=5 or $asistencia<=(CLASES*0.8)){

        echo "No aprobado";
    }

    else{echo "Aprobado";
    }
}
?>