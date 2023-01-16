<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <h5>Rappel de vos information</h5>
    <p><b>Nom</b> : <?php echo htmlspecialchars($_POST['nom']); ?></p>
    <p><b>Prénom</b> : <?php echo htmlspecialchars($_POST['prenom']); ?></p>
    <p><b>Email</b> : <?php echo htmlspecialchars($_POST['email']); ?></p>
    <p><b>Message</b> : <?php echo htmlspecialchars($_POST['message']); ?></p>
    <p><b>Pays</b> : <?php echo htmlspecialchars($_POST['pays']); ?></p>
    <p><b>Langue</b> : <?php echo htmlspecialchars($_POST['lang']); ?></p>
</body>
</html>