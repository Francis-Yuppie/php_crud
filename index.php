<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP CRUD</title>
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
    	<h2>List of Students</h2>

    	<a class="btn btn-primary" href="create.php" role = "button">New Student</a>
    	<br>

    	<table class="table table-striped table-bordered table-hover">
    		<thead>
    			<tr>
    				<th>#</th>
    				<th>Name</th>
    				<th>Email</th>
    				<th>Phone</th>
    				<th>Address</th>
    				<th>Created At</th>
    				<th>Action</th>
    			</tr>
    		</thead>
    		<tbody>
    			<?php
    			     $serverName = 'localhost';
					 $dbName = 'phpcrud';
					 $password = 'toor';
					 $user = 'root';

					 $con = new mysqli($serverName, $user, $password, $dbName);

					 if($con->connect_error){
					 	die('Connection to Database failed' . $con->connect_error);
					 }

					 $sql = 'SELECT * FROM client';

					 $result = $con->query($sql);

					 if(!$result){
					 	die('query failed' .$result->connect_error );
					 }
                     $path = __DIR__;
                     $path = substr($path, 13);
                     
					 while ($row = $result->fetch_assoc()) {
					 	echo "
    			            <tr>
	    				        <td>$row[id]</td>
	    				        <td>$row[name]</td>
	    				        <td>$row[email]</td>
	    				        <td>$row[phone]</td>
	    				        <td>$row[address]</td>
	    				        <td>$row[created_at]</td>

	    				        <td>
			    					<a class='btn btn-primary' href='edit.php?id= $row[id]' role = 'button'>Edit</a>
			    					 <a class='btn btn-danger' href='delete.php?id= $row[id]' role = 'button'>Delete</a>

	    			         	</td>
    		         	    </tr>
					 	";
					 }

    			?>
    				
    		</tbody>
    	</table>
    </div>
</body>
</html>