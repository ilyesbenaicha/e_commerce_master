<?php 
session_start();
if(isset($_SESSION['session_admin']))header("Location: home.php");
if(@$_REQUEST['post_login'] == 'admin' && @$_REQUEST['post_password'] == 'admin') {
	$_SESSION['session_admin'] = 'admin_connecter';
	header("Location: home.php"); 
}
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>The Affable Beans - Admin</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div  class="col-md-12">
	  <form action="index.php" role="form" class="col-md-4 col-md-offset-4" method="post">
		<div class="form-group">
		  <label for="exampleInputEmail1">Login</label>
		  <input name="post_login" type="text" class="form-control" id="" placeholder="Entrer votre login" required>
		</div>
		<div class="form-group">
		  <label for="exampleInputPassword1">Mot de passe</label>
		  <input name="post_password" type="password" class="form-control" id="" placeholder="Entrez votre mot de passe" required>
		</div>
		<button type="submit" class="btn btn-success">Se connecter</button>
	  </form>
	</div>

<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>
