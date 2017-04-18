 <?php


 $user = $_POST['user'];
 $passwd = $_POST['passwd'];
 $host = $_POST['host'];
 $database = $_POST['database'];



 try {

 	$connect = new PDO("mysql:host=$host", $user, $passwd);
 	var_dump($connect);
 	$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 	$sql = "CREATE DATABASE $database";
 	$connect->exec($sql);
 	echo "Database created successfully<br>";


} catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
}

$connect->closeCursor();

 	// function executeSqlFile(){
 	// 	$req = file_get_contents("BDD/create.sql");
 	// 	$req = file_get_contents("BDD/structure.sql");
 	// 	$req = file_get_contents("BDD/content.sql");
?>