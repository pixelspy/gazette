 <?php

 // $connect = mysql_connect(“localhost”, “phpmyadmin”, “max”); 
 // if (!connect) {
 // 	die('Connection Failed: ' . mysql_error());
 // } 
 // mysql_select_db(“gazette”, $connect);

 require 'model/model.php';

 $articles = getArticles();
 foreach($articles as $article) {
 	echo $article['art_title'] . "<br>"; 
 }
 // var_dump($articles); 

 // var_dump($_POST['user']); 

 