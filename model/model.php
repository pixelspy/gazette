<?php
function getArticles(){
  $connect = connect();
  $articles = $connect->query('SELECT * FROM `article` ');
  return $articles;
}

function getUsers(){
  $connect = connect();
  $users = $connect->query('SELECT * FROM `users` ');
  return $users;
}

function connect(){
	try {
		$connect = new PDO('mysql:host= . $_POST['host'] . ;dbname= . $_POST['database'] . ;charset=utf8', '$_POST['user']', '$_POST['passwd']');
		return $connect;
	} catch (Exception $e) {
		die('Erreur :' .$e->getMessage() ); 
	}
}
