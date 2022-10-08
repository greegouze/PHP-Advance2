<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks page</title>
</head>
<body>
   
    Merci <?= $_POST['firstname'] . ' ' . $_POST['lastname'] ?> de nous avoir contacteé à propos de <?= $_POST['mailSubject'] ?>. <br>
    Un de nos conseiler vous contactera soit à l'adresse <?= $_POST['email'] ?> ou par téléphone au <?= $_POST['phoneNumber'] ?> dans les plus brefs délais pour traiter votre demande: <br>
    <?= $_POST['message'] ?>
</body>
</html>

