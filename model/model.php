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
		$connect = new PDO('mysql:host=localhost;dbname=gazette2;charset=utf8', 'phpmyadmin', 'max');
		return $connect;
	} catch (Exception $e) {
		die('Erreur :' .$e->getMessage() ); 
	}
}
