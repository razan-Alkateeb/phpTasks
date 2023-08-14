<?php include 'conn.php'; ?>


<!doctype html>
<html lang="en">

<head>
    <title>Insert Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container">
    <form method='post' action='insert.php'>

        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name">
        </div>

        <div class="form-group">
            <label for="price">price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="price">
        </div>
        <div class="form-group">
            <label for=" description"> description</label>
            <textarea class="form-control" id=" description" rows="2" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="image">image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="image">
        </div>
        <button type="submit" class="btn btn-success" name='submit'>Submit</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    try{
    $sqli = "INSERT INTO products(name,price,description,image)
     VALUES (:name,:price,:description,:image)";

    $stmt = $conn->prepare($sqli);

    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_INT);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':image', $image, PDO::PARAM_STR);

    $stmt->execute();


    

    header('Location: table.php');

    }catch(PDOException $e) {
        echo 'failed to insert' . $e->getMessage();
    }


}
?>