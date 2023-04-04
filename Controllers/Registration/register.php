<?php

unset($_SESSION['user-already-exists-error']);

$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

//validate
if($username && $email && $pass){
    // check the user already exixts in db;
    $statement = $app['db']->query("SELECT * FROM login WHERE email ='$email'");
    $exists=$statement->fetchAll();

    if ($exists) {
        echo "<script>alert('user name is already taken')";
        $_SESSION['user-already-exists-error'] = 'The user name is already exixts';
        header('Location: /');
    }
    else{
        $statement = $app['db']->query("INSERT INTO login(username,email,password)VALUES('$username','$email','$pass')");
        $_SESSION['name'] = [
            'username' => $username
        ];

        // $to = "vigneshshankardckap@gmail.com";
        // $subject = "This mail form PHP";
        // $message = "Hello,<br/>\n";
        // $message .= "Your username is " . $username . "<br/>\n";
        // $header = "From:deepakmdckap@gmail.com";

        // $retval = mail($to,$subject,$message,$header);

        // if( $retval == true ) {
        //     echo "Message sent successfully...";
        //  }else {
        //     echo "Message could not be sent...";
        //  }




        // mail( to, subject, message, headers, parameters );
        // mail("vigneshshankardckap@gmail.com","This mail form PHP","Thanks for filling, for further details kindly reach us","deepakmdckap@gmail.com");

        // echo "<script>alert('thank you for filling')</script>";
        header('Location: /home');
    }
}

?>