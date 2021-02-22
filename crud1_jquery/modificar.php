<?php
include('database.php');
if(isset($_POST ['id'])){
    $id = $_POST['id'];
    $nombre = $_POST ['name'];
    $description = $_POST ['description'];
    $query = "UPDATE task SET name = '$nombre', description = '$description' WHERE id = $id";
    $resultado = mysqli_query($conexion,$query);
    if(!$resultado){
        die('senetencia ha fallado');
    }
    echo "se registro correctamente";
}

?>
