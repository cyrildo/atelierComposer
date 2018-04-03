<?php
/**
 * Created by PhpStorm.
 * User: gollum
 * Date: 03/04/18
 * Time: 14:57
 */


require __DIR__ . '/../vendor/autoload.php';

$salutation = new App\Wcs\Hello();
echo $salutation->talk();

$message = new HelloWorld\SayHello();
echo $message->world();
