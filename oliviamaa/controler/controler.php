<?php

require '../model/model.php';

$article_title = "";

if(isset($_POST['art_title'])) {
  $article_title = $_POST['art_title'];
}

$article_content = "";

if(isset($_POST['art_content'])) {
  $article_content = $_POST['art_content'];
}

$add_result = add_article($article_title, $article_content);

if($add_result['code'] === 1) {
  $article_title = "";
  $article_content = "";
}

$form_status = $add_result['message'];

require '../view/view.php';
