<?php

function check_values($article_title_, $article_content_) {
  $result = array('code' => 1, 'message' =>
    "Votre article a été validé."
  );

  if(strlen($article_content_) == 0) {
    $result = array('code' => 0, 'message' =>
      "Le contenu de l'article ne doit pas être vide."
    );
  }
  else if(strlen($article_content_) < 140) {
    $result = array('code' => 2, 'message' =>
      "Le contenu de l'article doit faire au moins 140 caractères."
    );
  }
  else if(strlen($article_content_) > 500) {
    if(strlen($article_title_) == 0) {
      $result = array('code' => 3, 'message' =>
        "Un article de plus de 500 caractères doit avoir un titre."
      );
    }
  }
  else {

  }

  return $result;
}

function add_article($article_title_, $article_content_) {
  $result = check_values($article_title_, $article_content_);

  if($result['code'] === 1) {
    try {
      $bdd = new PDO('mysql:host=localhost; dbname=formulaire_article; charset=utf8', 'phpmyadmin', 'simplon');
    }
    catch (Exception $e) {
      print "Erreur!:" .$e->getMessage() . "<br";
      die();
    }
    $req = $bdd->prepare('INSERT INTO form (art_title, art_content) VALUES(:art_title, :art_content)');
    $req->execute(array(
    'art_title'=>$_POST['art_title'],
    'art_content'=>$_POST['art_content']
    ));
  }

  return $result;
}
