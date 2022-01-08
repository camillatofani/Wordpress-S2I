<?php
    $yourEmail = 'camillatofani@gmail.com';
    
    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];
        
        if (mail($yourEmail, $subject . ' - Inviata da ' . $email, $msg)) {
            echo 'Email inviata correttamente.';
            header('Refresh: 3; url=' . $_SERVER["HTTP_REFERER"]);
        } else {
            echo 'C\'&grave; stato qualche problema durante l\'invio della mail. Riprova.';
            header('Refresh: 3; url=' . $_SERVER["HTTP_REFERER"]);
        }
    }
?>