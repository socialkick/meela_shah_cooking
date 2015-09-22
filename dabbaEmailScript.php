<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $message = $_POST['message'];
    $from = 'Dabba Order Form';
    $to = 'sk.kylethomas@gmail.com';
    $subject = 'NEW Dabba Request from: ' . $name;

    $body = "
            From: $name\n
            E-Mail: $email\n
            Amount Requested: $amount\n
            Date Requested: $date\n
            Message: $message\n
            ";

    if ($_POST['submit']) {
        if (mail ($to, $subject, $body, $from)) {
            header ('location: http://www.socialkick.it/meelaShah/dabbaRequestComplete.php');
        } else {
            echo '<p>Oops! An error occurred. Try sending your message again.</p>';
        }
    }
?>