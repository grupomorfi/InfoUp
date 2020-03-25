<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estiloPrueba.css"/>
    </head>
<body>
    <p class="xxx">Textos actualizados
    </p>
    <p class="xxx">
        <?php
        $servidor = "localhost";
        $usuario = "root";
        $clave = "";
        $baseDeDatos = "pruebaphp";
        $tabla = "pruebatabla";
        $conexion=mysqli_connect($servidor, $usuario, $clave, $baseDeDatos)
        or die ("paila conexión");
        $limpiar="delete from $tabla";
        mysqli_query($conexion,$limpiar);
        $uno=$_POST['uno'];
        $dos=$_POST['dos'];
        $insertar=mysqli_query($conexion, "insert into $tabla(uno, dos)values('$uno', '$dos')");
        $registros=mysqli_query($conexion,"select * from $tabla") or die ("paila registros".mysqli_error($registros));
        while ($mostrar=mysqli_fetch_array($registros)){ 
            echo $mostrar['uno']."<br>";
            echo $mostrar['dos']."<br>";
            echo "<hr>";
        }
        mysqli_close($conexion);
    ?>
    </p>
    </body>
</html>