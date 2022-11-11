<?php
    include 'iniciar.php';
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    if(isset($_POST['ingresando'])){
        if($usuario=="Rodrigonoa47@gmail.com" && $clave=="doki"){
            echo "<h1>Inicio de sesión correcta</h1>";
        }
        if($usuario!="Rodrigonoa47@gmail.com" || $clave!="doki"){
            echo "<h2>Inicio de sesión fallida</h2>";
        }
        if($usuario=="" || $clave==""){
            echo "<h2>Espacio vacio</h2>";
        }
    }
?>