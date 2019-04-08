<?php 
/* Se define las variables globales de conexión */
$server = "localhost";
$user = "root";
$pass = "";
$bd = "bdhandsontable";

/* Se estable la conexión haciendo uso de las variables creadas anteriormente  */
$conexion = mysqli_connect($server, $user, $pass, $bd) or die("Ha sucedido un error inesperado en la conexión de la base de datos");

/* Se crea la consulta la cual selecciona todas las filas de la tabla vino */
$sql = "SELECT * FROM vino";

/* Haciendo uso del método mysqli_set_charset se establece el conjunto de caracteres predeterminado a usar cuando se envían datos desde y hacia el servidor de la base de datos.*/
mysqli_set_charset($conexion, "utf8"); 

/* Haciendo uso del método mysqli_query se establece la conexión y se ejecuta consulta creada anteriormente */
if(!$result = mysqli_query($conexion, $sql)) die();

$vinos = array();
/* Haciendo uso del método mysqli_fetch_array se recorre todos los datos del resultado de la consulta y se crea un arreglo. */
while($row = mysqli_fetch_array($result)){ 
    $idvino=$row['idvino'];
    $acidezFija=$row['acidezFija'];
    $acidezVolatil=$row['acidezVolatil'];
    $acidoCítrico=$row['acidoCítrico'];
    $azucarResidual=$row['azucarResidual'];
    $cloruros=$row['cloruros'];
    $dioxidoAzufreLibre=$row['dioxidoAzufreLibre'];
    $dioxidoAzufreTotal = $row['dioxidoAzufreTotal'];
    $densidad = $row['densidad'];
    $ph = $row['ph'];
    $sulfatos = $row['sulfatos'];
    $alcohol = $row['alcohol'];
    $fecha = $row['fecha'];
    $calidad = $row['calidad'];

    $vinos[] = array(
        'idvino'=> $idvino, 
        'acidezFija'=> $acidezFija,
        'acidezVolatil'=> $acidezVolatil,
        'acidoCítrico'=> $acidoCítrico,
        'azucarResidual'=> $azucarResidual,
        'cloruros'=> $cloruros,
        'dioxidoAzufreLibre'=> $dioxidoAzufreLibre,
        'dioxidoAzufreTotal'=> $dioxidoAzufreTotal,
        'densidad'=> $densidad,
        'ph'=> $acidezVolatil,
        'acidezVolatil'=> $ph,
        'sulfatos'=> $sulfatos,
        'alcohol'=> $alcohol,
        'fecha'=> $fecha,
        'calidad'=> $calidad
    );
}
   
//desconectamos la base de datos
$close = mysqli_close($conexion) or die("Ha sucedido un error inesperado en la el cierre de la conexión de la base de datos");
  

//Se genera el formato JSON
$json_string = json_encode($vinos);
echo $json_string;
?>
