<?php

$db = new PDO('mysql:host=localhost;dbname=ajax', 'root', 'mickaella');

if (isset($_POST['name'], $_POST['message']) && !empty($_POST['name']) && !empty($_POST['message'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $message = htmlspecialchars(trim($_POST['message']));

    $db->exec("INSERT INTO utilisateurs(id, name, message, date) VALUES('', '$name', '$message', CURDATE())");
    echo "<span class='success'>Vos données ont bien été envoyées!!</span>";
} else {
    echo "<span class='error'>Veuillez saisier le formulaire !!</span>";
}

