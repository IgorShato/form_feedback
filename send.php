<?php 

/* get info */
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

/* convert characters */
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$comment = htmlspecialchars($comment);

/* url decoder */
$name = urldecode($name);
$email = urldecode($email);
$comment = urldecode($comment);

/* remove spaces  */
$name = trim($name);
$email = trim($email);
$comment = trim($comment);

/* */

if (mail ("your email ",  "feedback from the site", "Name: " .$name.". Email: " .$email.". Text: " .$comment , "From: email@email.com \r\n"))
{
    echo "$name, Thank you for your message! We will contact you as soon as possible.";
}else{
    echo "Error!";
}  