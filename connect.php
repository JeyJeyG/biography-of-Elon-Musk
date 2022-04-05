<?php
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    
    $message = trim($_POST['msg']);
     $myMail = "jeyjeyGraham@gmail.com";
     $header = "From:  "  .  $email;
     $message2 =  "you have recieved a  message from " . $name . ". \n\n" . $message;


    mail($myMail,  $message2, $header);
    header("Location: index.php?mailsent");

    
}


?>



