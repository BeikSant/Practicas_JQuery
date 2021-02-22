<?php

    include('database.php');
    if(isset($_POST ['search'])){
        $search = $_POST['search'];
        $query = "SELECT * FROM task WHERE name LIKE '$search%'";
        $resultado = mysqli_query($conexion,$query);
        if(!$resultado){
            die('la sentencia ha fallado');
        }
    }

    $json = array();
    while ($row = mysqli_fetch_array($resultado)) {
        $json[]= array(
            'name'=>$row['name'],
            'description'=>$row['description'],
            'id'=>$row['id']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
    
?>