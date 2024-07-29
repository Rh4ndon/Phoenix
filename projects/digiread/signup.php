<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Digibilities</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/login.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
<body>
<!--  Request me for a signup form or any type of help  -->
<div class="login-form">    
    <form action="controllers/userController.php" method="post">
		<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
    	<h4 class="modal-title">Sign Up</h4>
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="form-group">
            <input type="password" name="pass" class="form-control" placeholder="Password" required>
        </div>
        <!--div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox" required><a href="terms.php">Terms & Condition</a> </label>
         
        </div --> 
        <input type="submit" name="save" class="btn btn-primary btn-block btn-lg" value="Sign Up">              
    </form>			
    <div class="text-center small">Already have an account? <a href="index.php">Log in</a></div>
    <div class="text-center small">Go back to <a href="../../projects.html">Rhandon.tech</a></div>
</div>
</body>
</html>       
  
  
  
  
  