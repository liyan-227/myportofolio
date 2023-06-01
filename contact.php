<?php  
if (isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $mailTo = "lianpmu@gmail.com";
    $headers = "from : ".$email;
    $txt = "kamu ada pesan ".$name .\n\n .$phone .\n\n .$message;
    mail($mailTo, $name, $txt, $headers);
    header("location: index.html");
}


?>