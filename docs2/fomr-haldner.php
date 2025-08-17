<?php 
// Prikupljanje podataka iz HTML forme
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Email sa kog se šalje (možeš staviti svoj validan email)
$email_from = 'usg@gmail.com';

// Naslov mejla
$email_subject = 'New Form Submission';

// Telo mejla sa prikupljenim podacima
$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n";
                
// Primaoc mejla
$to = 'mila.ristic250802@gmail.com';

// Headers za mejl
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

// Slanje mejla
mail($to, $email_subject, $email_body, $headers);

// Preusmeravanje korisnika nazad na contact.html
header("Location: contact.html");
exit(); // preporučljivo da se doda na kraj
?>
