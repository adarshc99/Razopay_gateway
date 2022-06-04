<?php
    include "items.php";
    if(isset($_POST["inputSubmit"]))
    {
        // header("Location: http://localhost/razeopay/pay.php");
        session_start();
        foreach ($items as $key => $value) 
        {
           if($_POST["inputSubmit"] == $value["id"])
           {
                $_SESSION["id"] = $value["id"];
               $_SESSION["Price"] = $value["Price"];
               $_SESSION["image"] = $value["image"];
               
            
           }
        }      
    }

?>  


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 </head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <p id="error" class="bg-danger text-center" ></p>
  <form method="POST" action="BacktoPay.php">
  <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
    </div>
    <div class="mb-3">
      <label for="Phone Number">Phone number:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone" name="phone">
    </div>
    
    <button type="submit" class="btn btn-primary" name="detailsSubmit">Submit Details</button>
    
  </form>
  
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
