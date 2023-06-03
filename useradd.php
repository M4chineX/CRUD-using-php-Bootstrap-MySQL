<?php
    include 'db.php';
?>

<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];


      $sql = "INSERT INTO `contacts` (`name`, `email`, `address`) VALUES ( '$name', '$email', '$address')";

      $result = mysqli_query ($conn,$sql);

      if($result){
        
        header("Location: index.php"); /* Redirect browser */
        exit;
        
      }
    }
?>