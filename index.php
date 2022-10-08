<?php

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach($_POST as $value){
        trim($value);
    }

    if(empty($_POST['firstname'])){
        $errors[] = 'Erreur, le prénom est requis !';
    }
    if(empty($_POST['lastname'])){
        $errors[] = 'Erreur, le nom est requis !';
    }
    if(empty($_POST['email'])){
        $errors[] = 'Erreur, votre email est requis !';
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors[] = 'Erreur, votre email n\'est pas dans le bon format (ex: john.doe@mail.fr)!';
    }
    if(empty($_POST['phoneNumber'])){
        $errors[] = 'Erreur, votre numéro de téléphone est requis !';
    }
    if(empty($_POST['mailSubject'])){
        $errors[] = 'Erreur, le sujet de votre mail est requis !';
    }
    if(empty($_POST['message'])){
        $errors[] = 'Erreur, votre message est requis !';
    }

    if(empty($errors)){
        header('Location: thanks.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <ul style="list-style: none; max-width: 50%; margin:auto;">
    <?php 
        foreach($errors as $error){?>
            <li class="alert alert-danger">
                <?php echo $error ?>
            </li>
            
        <?php }
    ?>
    </ul>
    <form method="post" class="container bg-light border rounded p-5">
        <h1 class="text-center">Votre demande</h1>

        <p class="row">
            <label for="first-name" class="form-label">Prénom: </label>
            <input type="text" name="firstname" id="first-name" class="form-control" required>
        </p>

        <p class="row">
            <label for="last-name" class="form-label">Nom: </label>
            <input type="text" name="lastname" id="last-name" class="form-control" required>
        </p>

        <p class="row">
            <label for="email" class="form-label">Email : </label>
            <input type="email" name="email" id="email" class="form-control" required>
        </p>

        <p class="row">
            <label for="phone-number" class="form-label">Numéro de téléphone : </label>
            <input type="tel" name="phoneNumber" id="phone-number" class="form-control" size="10" required>
        </p>

        <p class="row">
            <label for="mail-subject" class="form-label">Sujet du mail:</label>
            <select name="mailSubject" id="mail-subject" class="form-control" required>
                <option>Sujet technique</option>
                <option>Avis</option>
                <option>Problème</option>
            </select>
        </p>

        <p>
            <label for="text-area">Votre message: </label>
            <textarea id="text-area" name="message" required></textarea>
        </p>

        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </p>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>