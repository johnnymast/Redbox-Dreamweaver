<?php
require 'autoload.php';

use Redbox\Dreamweaver;

$encoded_password = "53735A3C7A3C7955";

/** Should output. Your decoded password: SrX9v7sN  */
echo "Your decoded password: ".Dreamweaver\Dreamweaver::decode_password($encoded_password).PHP_EOL;
