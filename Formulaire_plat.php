
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>formulaire plat</title>
      <link href="assets/css/formulaire_plat.css" type="text/css" rel="stylesheet">
  </head>

  <body>


   <!-- <div class="header">
          /* ?php
              include("includes/header.php");
             ?> */

      </div> -->
         <div class="connexion">
           <h1>Ajoutez nouveau plat</h1>
           </p>
     <form method="post" action="connexion_plat.php" enctype="multipart/form-data">

   <div class="container" style="display:flex; margin-left: 26%; margin-top: 5%;">

        <div class="identite" style="margin-right:15%;">

    <label for="nom">Nom de plat :</label></br>
    <input type="text" required="required" name="nom" id="nom" /></br>

    <label for="prix">Prix : </label></br>
    <input type="text" name="prix" id="prix" /></br>

    <label for="image">image de votre plat :</label></br>
    <input type="text" name="image" placeholder="url de votre image" id="image" /></br>

 </div>

  <input id="button" type="submit" name="commit" value="Sign In">

    </form>
  </body>
</html>
