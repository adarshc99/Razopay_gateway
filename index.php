<?php
   include 'items.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="bg-warning">
    <div class="container-fluid">
        <h1 class="bg-danger text-center">FOOD HUNT</h1>
        <div class="row row-cols-3">
        <?php 
            foreach ($items as $key => $value) 
            {
        ?>
            <div class="col">
                <div class="d-flex flex-column mb-3">
                    <div class="p-2 bg-dark text-white text-center">
                        <?php echo $value["name"]; ?>
                    </div>
                    <img src=<?php echo $value["image"]; ?> class="mx-auto d-block w-100 rounded" alt="an_image" height="200px" >
                    <div class="p-2 bg-dark text-white text-center" data-price=<?php echo $value["Price"]; ?>>
                        <?php echo $value["Price"]." ";?>Rs.
                    </div>
                    <div class="p-2 bg-dark text-white text-center mt-1" data-price=<?php echo $value["Price"]; ?>>
                    <form action="userdetails.php" method="POST">
                        <button type="submit" class="btn btn-warning " name="inputSubmit" value=<?php echo $value["id"];?> >PAY</button>
                    </form>
                    </div>
                </div>
            </div>
            <?php  }  ?>
        </div>
            </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>