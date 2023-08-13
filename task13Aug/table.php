<?php include 'conn.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <title>Show Table</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="container">

    <a href="insert.php"><button type="button" class="btn btn-success"
    style="font-size:20px;margin:50px 0 30px">Insert</button></a>

    <?php

    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) { ?>
        <table class="table border">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>


            <tbody>
                <?php while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['price'] .'$'?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td>
                            <img src="images/<?php echo $row['image']?>.webp" 
                            style="width:100px;border-radius: 10px">
                        </td>
                        <td><a href="update.php?id=<?php echo $row['id'] ?>"><button type='button'
                         class="btn btn-primary">Update</button></a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>"><button type='button'
                            class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } ?>

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
