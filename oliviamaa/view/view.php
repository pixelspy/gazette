
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulaire et BDD</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="">
  <p><?= $form_status ?></p>
  <form class="" action="" method="post">
    <fieldset>
      <legend>Article</legend>
      <label for="art_title">Titre : </label>
      <input id="art_title" type="text" name="art_title" value="<?= $article_title ?>" placeholder="Titre">
      <textarea maxlength="2000" name="art_content" rows="8" cols="80" placeholder="Écris ton article ici :" ><?= $article_content ?></textarea>
      <button type="submit" name="button">Envoyer</button>


    </fieldset>

  </form>
</body>
</html>
