<?php 
$servername = 'mysql:host=localhost;dbname=shop';
$username = "root";
$password = "";

try{

$conn = new PDO($servername, $username, $password);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {

    echo 'failed to connect' . $e->getMessage();
}

?>


