<?php
error_reporting(0);
session_start();

$ruta_raiz = "."; 

$imagenes=$_SESSION["imagenes"];
    include("../include/head.php");
?>
<html>
<head> 
<title>Jonas Software de Gesti&oacute;n Documental</title>
  <link rel="shortcut icon" href="../imagenes/jonas.png">
  <script>
  
  function cerrar_ventana()
        {
           window.close();
        }
  </script>
  <?php  header("location: topFrame.php"); ?>
</head>
