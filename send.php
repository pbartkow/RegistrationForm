<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odczytanie formularza</title>
    <link rel="Stylesheet" type="text/css" href="stylesend.css">
</head>
<body>
<div class="form">
<h1>message sent</h1>
    <?php
    $to = 'example@mail.com';
    $name = $_POST['name']; 
    $surname = $_POST['surname'];
    $position = $_POST['position'];
    $mail = $_POST['mail'];
    $agreement = $_POST['agreement']; 
    $subject = 'Wiadomosc od: '. $name .'('. $mail .')';
    $headers = 'From: ' . $name . ' (' . $mail . ')';
    $headers .= 'Content-Type: text/html; charset=utf-8';

    //mail($to, $subject, $headers);
    echo "<p>NAME: " .$name ." </p>";
    echo "<p>SURNAME: ". $surname. "</p>";
    echo "<p>POSITION: ". $position ."</p>";
    echo "<p>EMAIL: ". $mail . "</p>";
    echo "<p>AGREEMENT: ". $agreement ."</p>";
    ?>
    </div>
</body>
</html>