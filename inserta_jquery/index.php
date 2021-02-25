<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>insertar datos con ajax</title>
    <script src="jquery-3.2.1.min.js"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
</head>
<body>

<!DOCTYPE html>
<html>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand">UNIVERSIDAD NACIONAL DE LOJA</a>
                
                <ul class="navbar-nav ml-auto">
                    <form class="form-inline my-2 my-lg-0">
                        <input name="search" id="search" class="form-control mr-sm-2" type="search"
                            placeholder="Buscar Task" aria-label="Search">
                        <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </ul>
            </div>
        </nav>

        <div class="jumbotron">
            <form id="frmajax" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido">
                </div>
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuairo</label>
                    <input type="text" class="form-control" name="usuario" id="usuario">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password </label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <button class="btn btn-primary" id="btnguardar">Guardar datos</button>
            </form>
        </div>

        <div class="card-footer text-light bg-dark">
            <footer>
                <center>
                    &copy;All rights reserved. |<br>
                    Estudiante: Beiker Santorum<br>
                    Curso: 5º "A<br>
                    Teléfono: 0986005899<br>
                    Cedula: 150031375
                </center>
            </footer>
        </div>
    </body>

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
</html>


