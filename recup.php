<?php

$db = new PDO('mysql:host=localhost;dbname=ajax', 'root', 'mickaella');

$messages = array();

$recup_message = $db->query("SELECT * FROM utilisateurs ORDER by id DESC");


while ($all = $recup_message->fetch()) {
    $messages[] = $all;
}

foreach ($messages as $message) {
    ?>
    <h4><?php echo $message['name']; ?></h4>
    <p><?php echo $message['message'].' | '.$message['date']; ?></p>
    <hr>
    <?php
}

?>