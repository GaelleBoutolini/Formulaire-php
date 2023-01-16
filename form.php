<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gérer mon formulaire</title>
</head>
<body>
<form action="action.php" method="POST">
  <fieldset>
	<legend>Langues</legend>
            <label> Nom: </label>
            <input name="nom" type="text" required> <br />

            <label> Prénom: </label>
            <input name="prenom" type="text" required> <br />

            <label> Email: </label>
            <input name="email" type="text" required> <br />

            <label> Message: </label>
            <input name="message" type="text" required> <br />
           
            <label> Pays: </label>
            <input name="pays" type="text" required> <br />
            <label> Ville: </label>
            <input name="ville" type="text" required> <br />
            
            <label> Langue: </label>
            <input name="lang" type="text" required> <br />
  </fieldset>
  <input type="submit" value="Envoyez">
</form>

</body>
</html>