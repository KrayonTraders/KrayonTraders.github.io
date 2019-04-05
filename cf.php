<?php
if (isset($_POST['sub'])) {
    $name=$_POST['vname'];
    $sub="sub";
    $mailFrom=$_POST['vemail'];
    $message=$_POST['msg'];
    $mailTo="info@krayontraders.com";
    $headers="From:".$mailFrom;
    $txt="You have recieved an email from ".$name."\n\n".$message;
    mail($mailTo,$sub,$txt,$headers);
    header("Location: index.php?mailsend");
}