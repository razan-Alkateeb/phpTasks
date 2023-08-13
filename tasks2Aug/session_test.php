<?php

  session_start();



  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST['user'] === "razan") {

      $_SESSION['info']['name'] = "Razan";//from DB
      $_SESSION['info']['id'] = 248;//from DB

    }
  }

  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';

  if (isset($_SESSION['info'])) {
    echo "Welcome " . $_SESSION['info']["name"] ;

   unset($_SESSION['info']);
    session_destroy();
  
  } else {

?>

<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Login">
</form>

<?php } ?>

