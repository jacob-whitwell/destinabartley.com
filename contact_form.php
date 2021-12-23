<?php

$email = $_POST['email'];
//EMAIL VALIDATION
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //Error
    header("location:contact_failed.php");
    return;
} else {
    //Success
    header("location:contact_done.php");
}

$message = $_POST['message'];
$mobile = $_POST['mobile'];


// message
$message = '
<html>
    <head>
        <title>Contact</title>
    </head>
    <body>
        <h1>You\'ve received a message through destinabartley.com</h1>
        <table>
            <tr>
                <td>E-mail address: </td>
                <td>' . $email . '</td>
            </tr>
            <tr>
                <td valign="top">Message: </td>
                <td valign="top">' . nl2br($message) . '</td>
            </tr>
            <tr>
                <td valign="top">Phone Number: </td>
                <td valign="top">' . $mobile . '</td>
            </tr>
        </table>
</body>
</html>
';

$headers = array();
// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'From: Destina Weddings <info@destinabartley.com>';
$headers[] = 'Bcc: destinabartley@outlook.com';
$headers[] = 'Bcc: jacobwhitwell@gmail.com';
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'X-Mailer: PHP/' . phpversion();

$to = 'Destina Bartley <destinabartley@outlook.com.com>';
$subject = 'Contact Via Website';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));

exit;