<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport">
    <title>Contact information</title>
</head>
<body>
<div>
    <h1>Merci <?= $firstName ?> <?= $lastName ?> de nous avoir contacté à propos de “<?= $subject ?>”.</h1>
    <p>Un de nos conseillers vous contactera soit à l’adresse <?= $email ?> ou par téléphone au <?= $phone ?> dans les plus brefs délais pour traiter votre demande :</p>
    <p><?= $message ?></p>
</div>

<h1>Bye!</h1>

</body>
</html>
