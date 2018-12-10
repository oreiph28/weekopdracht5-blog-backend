
   
<?php
$name = $_POST["username"];
$email = $_POST["email"];
$text = $_POST["form"];
$subject = $_POST["subject"];
$email2="oreiph28@gmail.com";
$headers = "From: myblog@ornelio.com" . "\r\n" .
"CC: somebodyelse@example.com";

//mail($email,$subject,$text,$headers);
mail($email2, $subject, $text);

echo $name."<br>";
echo $email."<br>";
echo $text."<br>";
echo $subject;
?>