<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
Tested working with PHP5.4 and above (including PHP 7 )

 */
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler(); 

$validator = $pp->getValidator();
$validator->fields(['company_name','email'])->areRequired()->maxLength(100);
$validator->field('email')->isEmail();
$validator->field('requirements')->maxLength(6000);


/* email address */
$pp->sendEmailTo('feedbackprabhupriya@gmail.com'); // ← Your email here

echo $pp->process($_POST);
?>