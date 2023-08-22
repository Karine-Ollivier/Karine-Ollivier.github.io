<?php

if (isset($_POST['submit'])) {
    if (empty($_POST['recaptcha-response'])) {
        header('Location: index.html');
    } else { // On prépare l'URL
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=6LeGyEgbAAAAAP8qNk8On7Gu3Pd4P94bRbZmdfTL&response={$_POST['recaptcha-response']}";
        $response = file_get_contents($url);


        if ((!empty($_POST['nomprenom'])) && (!empty($_POST['mail'])) && (!empty(['message']))) {
            $nomprenom = strip_tags($_POST['nomprenom']);
            $mail = strip_tags($_POST['mail']);
            $message = strip_tags($_POST['message']);
            $mailto = "karine.ollivier@oclock.school";
            $sujet = "Mon CV intéractif";
            $headers = "From :" . $mail;
            $txt = "Tu as reçu un message de " . $nomprenom . ".\n\n" . $message;

            mail($mailto, $sujet, $txt, $headers);
        } else {
            var_dump("echec");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class="thanks">
    <h1>Merci pour ton retour !</h1>
    <p>Si tu veux retourner à mon CV : <a href="index.html">clique-ici</a></p>
</body>

</html>
