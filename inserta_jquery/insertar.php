<?php
    $conexion=mysqli_connect('localhost','root','beiksant','insertar'); 
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "insert into usuarios (nombre, apellido, usuario, password) 
    values ('$nombre','$apellido','$usuario', '$password')";
    echo mysqli_query($conexion,$sql);

?> 