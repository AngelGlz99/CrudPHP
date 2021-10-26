<?php
include("./inc/settings.php");
validar();

$identificador=$_POST ['identificador'];
$nombre=$_POST ['nombre'];
$fecha=$_POST ['fecha'];
$numero=$_POST ['numero'];
$numdouble=$_POST ['numdouble'];

$query="INSERT INTO table1 (column1, column2, column3, column4, column5) VALUES ($identificador, '$nombre', '$fecha', $numero, $numdouble);";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ( $conn->query($query)){
    header("location:crud.php");
}else{
    echo "Algo salio mal <a href='https://localhost/crud/crud.php'> clic aqui para volver al crud</a>" ;

}


?>
