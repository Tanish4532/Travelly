<?php
$username="root";
$password="";
$server="localhost";
$db="trip";

$con=mysqli_connect($server,$username,$password,$db);
if($con){
    ?>
    <script>
        alert("Connection Successfull");
        </script>
        <?php
}
else{
    ?>
    <script>
        alert("Connection Unsuccessfull");
        </script>
        <?php
}
?>