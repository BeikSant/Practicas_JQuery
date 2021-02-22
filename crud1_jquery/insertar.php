
<?php
include('database.php');
if(isset($_POST ['name'])){
    $nombre = $_POST ['name'];
    $description = $_POST ['description'];
    $query = "INSERT INTO task(name, description) VALUES ('$nombre','$description')";
    $resultado = mysqli_query($conexion,$query);
    if(!$resultado){
        die('senetencia ha fallado');
    }
    echo "se registro correctamente";
}

?>
