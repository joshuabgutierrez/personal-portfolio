<?php

function filterName($field)
{
    // Sanitize name
    $field = filter_var($field, FILTER_SANITIZE_STRING);

    // Validate name
    if (filter_var($field, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        return $field;
    } else {
        return false;
    }
}

function filterEmail($field)
{
    // Sanitize email address
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);

    // Validate email address
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return $field;
    } else {
        return false;
    }
}

function filterMessage($field)
{
    // Sanitize message
    $field = filter_var($field, FILTER_SANITIZE_STRING);

    if (!empty($field)) {
        return $field;
    } else {
        return false;
    }
}

// Variables errors and inputs
$nameError = $emailError = $messageError = '';
$name = $email = $message = '';

// Processing form after submitting
if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    // Validate name
    if (empty($_POST['name'])) {
        $nameError = "Please enter your name";
    } else {
        $name = filterName($_POST["name"]);

        if ($name === false) {
            $nameError = 'Please enter a valid name';
        }
    }

    // Validate email address
    if (empty($_POST['email'])) {
        $emailError = 'Please enter your email';
    } else {
        $email = filterEmail($_POST['email']);
        if ($email === false) {
            $emailError = 'Please enter a valid email address';
        }
    }

    // Validate message
    $message = filterMessage($_POST['message']);

    if ($message === false) {
        $messageError = 'Please enter a valid message';
    }

    // Check there are no errors before we sent the email
    if (empty($nameError) && empty($emailError) && empty($messageError)) {
        $to = "joshgm15@gmail.com";
        $headers = 'From: ' . $email . "\r\n" .
            "Reply-To: " . $email . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

        // Sending email
        if (mail($to, $message, $headers)) {
            echo '<p>Message sent successfully</p>';
        } else {
            echo '<p>Something went wrong! Please try again later</p>';
        }
    }
}
