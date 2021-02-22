<?php
    $conexion = mysqli_connect('localhost','root','beiksant','tasks_app');
    if(!$conexion){
    echo "<p> Error al conectar la base de datos" . mysql_connect_error() . "</p>"; 
    }
?>