<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
<?php

$retour = mail("rthourigny@gmail.com", "objet envoi mail du formulaire", "coucou c'est parti !", "");
if (retour) {
    echo "<p>L'email est bien envoyé.<p>";
}
?>

    
</body>
</html>
