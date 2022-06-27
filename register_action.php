<?php
include('connection.php');
  $id=$_POST['id'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mark=$_POST['mark'];        
$sql="INSERT INTO `tbl_stud`(`id`, `fname`, `lname`, `mark`) VALUES ('$id','$fname','$lname',' $mark')";
$rs=mysqli_query($conn,$sql);

  if($rs)
  {
      echo "Successfully inserted";
    header('location:index.php');
  }


?>

