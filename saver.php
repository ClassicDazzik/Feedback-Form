<?php

// Syntaxes
$TheForm = fopen("index.html", "r") or die("Failed to open file.");
$title = $_POST['title'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Save Form Responses into Txt file

$file=fopen("result.txt", "a");
$write= ($title . "\n" . $email . "\n" . $feedback);
fwrite($file, $write);
fclose($file);

// Email (I didnt have mailserver setup so i didnt test this)
$mesSubject = 'Feedback Received!';
$mes = 'Hello! Thank you for the feedback.';
$message = mail ($email, $mesSubject, $mes)
?>

<!DOCTYPE html>
<html>
<head>
<title>Feedback Page</title>
</head>
<body>

<h1>Thank you! Here are your responses</h1>
<?php
echo "Your email is " . $email . "<br>";
echo "Feedback's Title: " . $title . "<br>";
echo "Submitted Feedback: " . $feedback . "<br>";
?>

</body>
</html>
