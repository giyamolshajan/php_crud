<?php
include('connection.php');
if (isset($_POST['update']))  
{
$id=$_GET['id'];
echo $id;
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mark=$_POST['mark'];  
$sql = "UPDATE `tbl_stud` SET `fname`='$fname',`lname`='$lname',`mark`='$mark' WHERE `id`='$id'";

$result=mysqli_query($conn,$sql);

	if ($result == TRUE) {

		echo "Record updated successfully.";
		header('location:index.php');

	}
	else
	{
		echo "Error";

	}
}
	if (isset($_GET['id'])) 
	{

		$id = $_GET['id']; 
		$sql = "SELECT * FROM `tbl_stud` WHERE `id`='$id'";
		$result = $conn->query($sql); 
	
		if ($result->num_rows > 0) {        
	
			while ($row = $result->fetch_assoc()) {
	            
				$id = $row['id'];
				$fname = $row['fname'];
				$lname = $row['lname'];
				$mark = $row['mark'];
	
			} 
	}
	
	  
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	    <!-- Bootstrap CSS  -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/user_registration.css">
</head>
<body>
	<div class="container-fluid">
		
		<div class="regform">
			<div class="mainhead"> REGISTER</div>
			<form action="" method="POST">

                <div class="inp4">

  					<input id="text" name="id" type="hidden" value="<?php echo $id; ?>" required >
  					
			    </div> 
				<div class="inp1">
					<input type="text" id="fname" name="fname" value="<?php echo $fname; ?>" required>
				</div>

				<div class="inp2">
				   <input type="text" id="lname" name="lname"  value="<?php echo $lname; ?>" required>
			    </div>

				<div class="inp3">
				    <input type="mark" id="mark" name="mark" value="<?php echo $mark; ?>" required>
			    </div>

				<div class="inp9">
					<input type="submit" id="submit"  class="btn btn-info" name="update"  value="UPDATE" >
				
			    </div>
			</form>
			   </div>
				
	    </div>
	</div>

<!-- Bootstrap JavaScript  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- Bootstrap JavaScript  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
