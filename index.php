<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/handsontable@latest/dist/handsontable.full.min.css">
    <link rel="stylesheet" type="text/css" href="https://handsontable.com/static/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/handsontable@latest/dist/handsontable.full.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <title>HandsOnTable| Universidad Libre Calí</title>
</head>

<body>
    <h1>EJEMPLO DEL USO DE HANDSONTABLE HACIENDO USO DE LA BASE DE DATOS "CALIDAD DE LOS VINOS ROJOS"</h1>
   
    <!--Contenedor para la etiqueta buscar -->
    <input id="id_contenedor_buscar" type="search" placeholder="Buscar">

    <!-- Contenedor para etiqueta correspondiente a la tabla -->
    <div id="id_contenedor_tabla"></div>

    <!-- Se carga la librería propia de nombre tabla_ejemplo_handsontable.js es conveniente 
    colocarlas al final de la etiqueta body ya que estas hacen uso de las librerías que se cargan
    previamente--> 
    <script src="tabla_ejemplo_handsontable.js"></script>
</body>

</html>