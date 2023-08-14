<?php include 'conn.php';

try {
$id=$_GET['id'];
$sql = "DELETE FROM products  WHERE id='$id'";

$conn->exec($sql);

header('Location: table.php');

}catch(PDOException $e) {

    echo 'failed to delet' . $e->getMessage();
    } 


?>