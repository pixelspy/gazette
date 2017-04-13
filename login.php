<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login BDD</title>
</head>
<body>
	<h1>Bienvenue sur login.php</h1>
	<h2>Connexion obligatoire </h2>
	<div class="content">
		<form class="form" action="info.php" method="post" >
			<label for="user">USERNAME :</label>
			<input id="user" name="user" type="text" placeholder="Enter your Username"/>
			<label for="passwd">PASSWORD : </label>
			<input id="passwd" name="passwd"type="text" placeholder="Enter your Password"/>
			<label for="host">HOSTNAME :</label>
			<input id="host" name="host" type="text" placeholder="Enter your Host"/>
			<label for="database">DATABASE NAME :</label>
			<input id="database" name="database" type="text" placeholder="Enter your DatabaseName"/>
			<div class="submit">
				<button type="submit" name="button">Send</button>
			</div>
		</form>
	</div>
</body>
</html>