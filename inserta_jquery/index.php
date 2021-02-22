<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>insertar datos con ajax</title>
    <script src="jquery-3.2.1.min.js"></script>
</head>
<body>

    <form id="frmajax" method="POST">
        <label>Nombre</label>
        <p></p>
        <input type="text" name="nombre" id="nombre">
        <p></p>
        <label>apellido</label>
        <p></p>
        <input type="text" name="apellido" id="apellido">
        <p></p>
        <label>Usuario</label>
        <p></p>
        <input type="text" name="usuario" id="usuario">
        <p></p>
        <label>password</label>
        <p></p>
        <input type="text" name="password" id="password">
        <p></p>
        <button id="btnguardar">Guardar datos</button>
    </form>

</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btnguardar').click(function(){
            var datos = $('#frmajax').serialize();
            $.ajax({
                type:"POST",
                url:"insertar.php",
                data:datos,
                success: function(respuesta){
                    if(respuesta == 1){
                        alert("Agregado con éxito");
                    } else {
                        alert("Fallo el servidor");
                    }
                }
            });
            return false;
        });
    });
</script>

