<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
            $header = "From: noreply@example.com" . "\r\n";
            $header.="Reply-To: noreply@example.com" . "\r\n";
            $header.="X-Mailer PHP/". phpversion();
            $email = mail($email, $name, $comment, $header);
            if($mail){
                echo "<h4> Enviado. </h4>";
            }
        }
    }

?>