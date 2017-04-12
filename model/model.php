<?php
function getArticles(){
  $connect = connect();
  $articles = $connect->query('SELECT * FROM `articles` ');
  return $articles;
}

function getUsers(){
  $connect = connect();
  $users = $connect->query('SELECT * FROM `users` ');
  return $users;
}

function connect(){
  $connect = new PDO('mysql:host=localhost;dbname=gazette;charset=utf8', 'root', 'simplon');
  return $connect;
}
