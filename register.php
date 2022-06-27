<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style/user_registration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		
		<div class="regform">
			<div class="mainhead"> REGISTER</div>
			<form action="register_action.php" method="POST" onsubmit="return validate()">

                <div class="inp4">

  					<input id="text" name="id" type="id" required >
  					
			    </div> 
				<div class="inp1">
					<input type="text" id="fname" name="fname" placeholder="FirstName" required>
				</div>

				<div class="inp2">
				   <input type="text" id="lname" name="lname"  placeholder="LastName" required>
			    </div>

				<div class="inp3">
				    <input type="mark" id="mark" name="mark" placeholder="mark" required>
			    </div>

				<div class="inp9">
					<input type="submit" id="submit" name="submit"  value="Submit" >
			    </div>
			</form>
			   </div>
				
	    </div>
	</div>
<script type="text/javascript" src="script/user_registration.js">
	
</script>
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
</body>
</html>
