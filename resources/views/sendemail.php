<?php

$name = $REQUEST['name'];
$number = $REQUEST['number'];
$email = $REQUEST['email'];
$subject = $REQUEST['subject'];
$Message = $REQUEST['Message'];

if(empty($name) || empty($number) || empty($email) || empty($subject) || empty($Message)){
    echo "Please fill the all field ";
}else{
    mail("arman468khan@gmail.com","theseniorquote_message",$Message,"From: $name<$email> ");
    echo "<script type='text/javascript>alert('Form submitted successfully');
    window.history.lof(-1);
    </script>";
}






// if($_POST["message"]) {


// mail("abmsaood5900@gmail.com", "Here is the subject line",


// $_POST["hello"]. "From: arman468khan@gmail.com");


// }


?>

