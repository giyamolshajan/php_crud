<?php
include('connection.php');
if (isset($_GET['id']))
 {

    $id = $_GET['id'];

    $sql = "DELETE FROM `tbl_stud` WHERE `id`='$id'";
   

     if ($conn->query($sql) === TRUE)
      {

           header('location:index.php');        
                    echo "Record deleted successfully.";
      }
                else
                {
                    echo  "error deleting record:" . $conn->error;
                }
           
          
            }
$conn->close();
?>