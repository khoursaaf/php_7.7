<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (empty($_POST['lastname']) && empty($_POST['firstname'])) { ?>
      <form action="index.php" method="post" enctype="multipart/form-data">
        <select name="gender">
          <option value="Mr">Mr</option>
          <option value="Mme">Mme</option>
          <option value="Autres">Autres</option>
        </select>
        <p><input type="text" name="lastname" placeholder="Votre nom"></p>
        <p><input type="text" name="firstname" placeholder="Votre Prenom"></p>
        <p>Formulaire d'envoi de fichier :<input type="file" name="monfichier"/></p>
        <p><input type="submit" value="Valider"></p>
      </form>
    <?php }
    else { ?>
      <p>Bonjour <?php echo $_POST['gender'].' '.$_POST['lastname'].' '.$_POST['firstname'];?> , le fichier que vous avez transmis est "<?php echo basename($_FILES['monfichier']['name']); }?>".</p>
    <a href="index.php"><button type="button" name="button">Retour</button></a>
  </body>
</html>
