<?php

   $serverName = 'localhost';
   $dbName = 'phpcrud';
   $password = 'toor';
   $user = 'root';

   $con = new mysqli($serverName, $user, $password, $dbName);

    if($con->connect_error){
      die('Connection to Database failed' . $con->connect_error);
    }
 



   $name = "";
   $email  = "";
   $phone = "";
   $address = "";

   $errorMessage = "";
   $sucessMessage = "";


   function validateData($data)
   {

   	$data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);

    return $data;
   }

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
   	 if(isset($_POST)){

   	 	$name = validateData($_POST['name']);
   	 	$email = validateData($_POST['email']);
   	 	$phone = validateData($_POST['phone']);
   	 	$address = validateData($_POST['address']);


   	 	do {
   	 		if (empty($name) || empty($email) || empty($phone) || empty($address)) {
   	 		   $errorMessage = "All Input Fields are required.";
   	 		   break;
   	 	    }

         //add new student

         $sql = "INSERT INTO client(name, email,phone, address)" .
                "VALUES ('$name', '$email', '$phone','$address')";

          $result = $con->query($sql);
          if(!$result){
            $errorMessage = "invalid query: " . $con->error;
             break;
          }

   	 	   $name = "";
		   $email  = "";
		   $phone = "";
		   $address = "";

		   $sucessMessage = "Record added successfuly.";

           header("location: index.php");
           exit();
 
   	    } while (false);
   	 
   	 }
   }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD</title>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <script defer src="bootstrap/dist/js/bootstrap.min.js"></script>

</head>
<body>
     <div class="container my-5">
     	<h2>New Student</h2>
           <?php 
               if (!empty($errorMessage)) {
               	 echo "
               	      <div class = 'alert alert-warning alert-dismissible show fade' role = 'alert'>

               	          <strong>$errorMessage</strong>
               	          <button type = 'button' class = 'btn-close' data-bs-dismiss = 'alert' aria-label = 'close'></button>
               	      </div>
               	 ";
               }

            ?>


     	<br>

     	<form class="form" method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>">
     		<div class="row mb-3">
     			<label class="col-sm-4 col-form-label">Name</label>
     			<div class="col-sm-6">
     				<input type="text" name="name" class="form-control" value="<?= $name;?>">
     			</div>
     		</div>

     		<div class="row mb-3">
     			<label class="col-sm-4 col-form-label">Email</label>
     			<div class="col-sm-6">
     				<input type="email" name="email" class="form-control" value="<?= $email; ?>">
     			</div>
     		</div>

     		<div class="row mb-3">
     			<label class="col-sm-4 col-form-label">Phone</label>
     			<div class="col-sm-6">
     				<input type="text" name="phone" class="form-control" value="<?= $phone;?>">
     			</div>
     		</div>

     		<div class="row mb-3">
     			<label class="col-sm-4 col-form-label">Address</label>
     			<div class="col-sm-6">
     				<input type="text" name="address" class="form-control" value="<?= $address;?>">
     			</div>
     		</div>
             
             <?php 
               if(!empty($sucessMessage)){
               	 echo "
               	   <div class = 'row mb-3'>
               	      <div class = 'offset-sm-3 col-sm-3'>
               	         <div class = 'alert alert-success alert-dismissible show fade' role = 'alert'>

               	           <strong>$sucessMessage</strong>
               	           <button type = 'button' class = 'btn-close' data-bs-dismiss = 'alert' aria-label = 'close'></button>

               	          </div>
               	      </div>
               	   </div>

               	   ";
               }


             ?>
     		 <div class="row mb-3">
     		 	<div class="offset-sm-3 col-sm-3 d-grid">
     		 		<button class = "btn btn-primary" type="submit">Submit</button>
     		 	</div>

                  <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href = "index.php" role = "button">Cancel</a>
                </div>
     		 </div>

     	</form>
     </div>
</body>
</html>