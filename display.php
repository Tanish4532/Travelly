<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelly</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="text-center mt-4">
            <h1>LIST OF APPLICATIONS</h1>
            <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">sno</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Info</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include 'connection.php';
    $selectquery="select * from travelly";
    $query=mysqli_query($con,$selectquery);
    while($res=mysqli_fetch_array($query)){
        ?>
        <tr>
            <th scope="row">
                <?php
                echo $res['sno'];
                ?>
                </th>
                <td>
                    <?php
                    echo $res['name'];
                    ?>
                    </td>
                    <td>
                        <?php
                        echo $res['age'];
                        ?>
                        </td>
                        <td>
                            <?php
                            echo $res['gender'];
                            ?>
                            </td>
                            <td>
                                <?php
                                echo $res['email'];
                                ?>
                                </td>
                                <td>
                                    <?php
                                    echo $res['phone'];
                                    ?>
                                  </td>
                                  <td>
                                      <?php
                                      echo $res['info'];
                                      ?>
                             </td>
    </tr>
    <?php
    }
    ?>
    
   
  </tbody>
</table>
</div>
</div>
    
</body>
</html>