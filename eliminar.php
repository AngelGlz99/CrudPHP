<?php
include("./inc/settings.php");
validar();

$id=$_POST['colum1'];

$query="DELETE FROM table1 WHERE column1=$id;";


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