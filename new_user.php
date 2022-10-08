<?php

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

$username = encrypt_decrypt("encrypt","namangoel");
$pass = md5("pp@2020");

print_r("username<br>");
print_r($username);
print_r("pass<br>");
print_r($pass);
?>