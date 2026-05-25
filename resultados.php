<!DOCTYPE html>
<html>
<head>
    <title>Resultados</title>
    <script src="app.js"></script>
<head></head>    

    <style>
        #dialogoverlay{
            display: none;
            opacity: .8;
            position: fixed;
            top: 0px;
            left: 0px;
            background: #FFF;
            width: 100%;
            z-index: 10;
        }

        #dialogbox{
            display: none;
            position: fixed;
            background: #000;
            border-radius:7px;
            width:550px;
            z-index: 10;
        }

        #dialogbox > div{
            background:#FFF;
            margin:8px;
        }

        #dialogbox > div > #dialogboxhead{
            background: #666;
            font-size:19px;
            padding:10px;
            color:#CCC;
        }

        #dialogbox > div > #dialogboxbody{
            background:#333;
            padding:20px;
            color:#FFF;
        }

        #dialogbox > div > #dialogboxfoot{
            background: #666;
            padding:10px;
            text-align:right;
        }
    </style>
</head>

<body>

<div id="dialogoverlay"></div>

<div id="dialogbox">
    <div>
        <div id="dialogboxhead"></div>
        <div id="dialogboxbody"></div>
        <div id="dialogboxfoot"></div>
    </div>
</div>

<h1>¡Bien hecho!</h1>

<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];

echo "<h2>Nombre: ".$nombre."</h2>";
echo "<h2>Correo: ".$correo."</h2>";
echo "<h2>Edad: ".$edad."</h2>";

?>

<button onclick="Alert.render()">
    Regresar
</button>

</body>
</html>