<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){


$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);


echo "<h2>Informations reçues :</h2>";
echo "Nom : " . $name . "<br>";
echo "Email : " . $email . "<br>";
echo "Sujet : " . $subject . "<br>";
echo "Message : " . $message . "<br>";


}


?>
