<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'myemail@email.com';
    $subject = $_POST['subject'];
    $human = $_POST['human'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit'] && $human == '15') {
        if (mail($to, $subject, $body)) {
            echo '<p>Your message has been sent!</p>';
        } else {
            echo '<p>Something went wrong, go back and try again!</p>';
        }
    } else if ($_POST['submit'] && $human != '15') {
        echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
