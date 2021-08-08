<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&family=MonteCarlo&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </head>
  <body>
    <img class="bg" src="bg.jpg" alt="travelly" />
    <div class="container">
      <h1>WELCOME TO TRAVELLY</h1>
      <p>
        Enter your details and submit this form to confirm your participation in
        this trip.
      </p>
      <form action="" method="POST">
        <input
          type="text"
          name="user"
          id="user"
          placeholder="Enter your Name"
        />
        <input type="text" name="age" id="age" placeholder="Enter your Age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter your gender"
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your email"
        />
        <input
          type="text"
          name="phone"
          id="phone"
          placeholder="Enter your phone number"
        />
        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="Enter any other information"
        ></textarea>
        <br>
        <button type="submit" class="btn btn-primary" name="submit">Register</button>
        <a class="btn btn-success" href="display.php">Check Form</a>
      </form>
    </div>
    
  </body>
</html>
<?php
include 'connection.php';
//Inserting data
if(isset($_POST['submit'])){
    $name=$_POST['user'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $emails=$_POST['email'];
    $mobile=$_POST['phone'];
    $message=$_POST['desc'];
    $insertquery="insert into travelly(name,age,gender,email,phone,info) values('$name','$age','$gender','$emails','$mobile','$message')";
    $res=mysqli_query($con,$insertquery);
    if($res){
        ?>
        <script>
            alert("Data inserted successfully");
            </script>
            <?php
    }
    else{
        ?>
        <script>
            alert("Data not inserted successfully");
            </script>
            <?php
    }
}
?>
