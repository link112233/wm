<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/login/login.js"></script>
<link rel="stylesheet" type="text/css" href="css/admin_login.css">
<title>EWM | Login op je account</title>
</head>
<body>
<div class="container">
	<div class="row login_box">
	    <div class="col-md-12 col-xs-12" align="center">
        <div class="outter"><img src="images/loginlogored.png" class="image-circle"/></div>
        	<h1>Hallo!</h1>
          <span>Login op je account</span>
	    </div>
<form method="post" action="php/login/login.php">
  <div class="col-md-12 col-xs-12 login_control">
    <div class="control">
      <div class="label">E-mailadres</div>
        <input type="text" class="form-control" name="email" id="email">
    </div>
    <div class="control">
      <div class="label">Wachtwoord</div>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <div align="center">
      <input type="submit" name="submit_login" id="submit_login" class="btn btn-orange" value="Login">
    </div>
		<div id="add_err"></div>
	</div>
</form>
		</div>
</div>
</body>
</html>
