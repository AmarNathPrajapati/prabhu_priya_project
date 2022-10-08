<?php
$host="localhost";
/* $user_id="root";
 $pass="";
 
 */
 $con = mysqli_connect('localhost', 'root', '', 'prabhu_priya');
//  $con = mysqli_connect('localhost', 'hqohqyna_root', 'V#02eIfd2z=.', 'hqohqyna_pp');
/* $userid="onomatop_sanchit";
    $pwd="Onomatop@1234";*/
date_default_timezone_set('Asia/Kolkata');
//$con = mysqli_connect($host, $user_id, $pass, 'onomatop_pp');
// $con = mysqli_connect('localhost', 'root', '', 'inspection_portal');
// $con = mysqli_connect('localhost', 'r8gfp9g7xoe0', 'CheckYourViz@2', 'inspection_portal_kleenwel');
if(!$con)  die("Error in connection".mysqli_connect_error());

function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'pepperjab';
    $secret_iv = openssl_cipher_iv_length($encrypt_method);
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

?>