

  <?php

 
    //when refresh page set cookie value
  if (isset($_COOKIE["background"])) {
    echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //create cookies
    setcookie("background", $_POST["bg-color"], strtotime("+1 year"));

    // refresh page
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit();
  }

?>


<form action="" method="POST">
  <input type="color" name="bg-color">
  <input type="submit" value="Choose Color">
</form>