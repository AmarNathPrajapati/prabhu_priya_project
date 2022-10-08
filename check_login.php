<?php
include("config.php");
session_start();

if($_POST['action']=="check"){

    $uname=encrypt_decrypt("encrypt",$_POST['username']);
    $pass=md5($_POST['password']);
           // echo $uname." ".$pass;
    $q1=$con->prepare("select id from users where username= ? AND password = ? ");
    $q1->bind_param("ss",$uname,$pass);
    if($q1->execute()){
        $q1->store_result();
        $q1->bind_result($id);

        while($q1->fetch()){
            if($id>0){
                $_SESSION['isadmin']=1;
                echo 1;
            }
            else{
                echo 0;
            }
        }
    }
    else{
        echo 2;
    }
    $q1->close();
}
?>