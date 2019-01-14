<?php
// appel du controller pour avoir les erreurs sur mon formulaire.
include_once('controllerpatient1.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <title>Ajout-patient</title>
    </head>
    <body>
        <div>
            <form method="POST" action="">
                <p><label for="lastname">Nom:</label>
                    <input type="text" name="lastname" id="lastname" size="30" maxlength="10" /> 
                <span class="error"><?= isset($errorsArray['lastname']) ? $errorsArray['lastname'] : ''; ?></span></p>

                <p><label for="firstname">Prénom:</label>
                    <input type="text" name="firstname" id="firstname" size="30" maxlength="10" />
                <span class="error"><?= isset($errorsArray['firstname']) ? $errorsArray['firstname'] : ''; ?></span></p>

                <p><label for="birthdate">Date de naissance:</label>
                    <input type="date" name="birthdate" id="birthdate" size="30" maxlength="10" />
                <span class="error"><?= isset($errorsArray['birthdate']) ? $errorsArray['birthdate'] : ''; ?></span></p>

                <p><label for="phone">Téléphone:</label>
                    <input type="text" name="phone" id="phone" size="30" maxlength="10" />
                <span class="error"><?= isset($errorsArray['phone']) ? $errorsArray['phone'] : ''; ?></span></p>

                <p><label for="mail">Email:</label>
                    <input type="email" name="mail" id="mail" size="30" maxlength="50" />
                <span class="error"><?= isset($errorsArray['mail']) ? $errorsArray['mail'] : ''; ?></span></p>

                <input id="button" type="submit" name="sendButton" value="Envoyer" />
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>       
    </body>
</html>
