<?php

include("connection.php");

$sql = "SELECT * FROM `tbl_stud`";

$result = mysqli_query($conn,$sql);
// header('location:index.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   
</head>

<body>
    <div class="container">
        <h2>users</h2>
        <div class="text-end">
        <a href="pdf.php" class="btn btn-outline-warning my-3">DOWNLOAD</a>
       </div>

        <div class="text-end">
        <a href="register.php" class="btn btn-primary">CREATE</a>
       </div>

        <table class="table">


    <thead>
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Mark</th>
    </tr>

    </thead>
    <tbody>

        <?php
            if(mysqli_num_rows($result)>0)
             {
                //  $result->fetch_assoc()

                while ($row = mysqli_fetch_array($result)) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['fname']; ?></td>

                    <td><?php echo $row['lname']; ?></td>

                    <td><?php echo $row['mark']; ?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td> </tr>                      

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div>
<!-- Bootstrap JavaScript  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>
