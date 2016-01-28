<?php
require 'autoload.php';
use Redbox\Dreamweaver;

$password = "SrX9v7sN";

/** Should output. Your encoded password: 53735A3C7A3C7955 */
echo "Your encoded password: ".Dreamweaver\Dreamweaver::encode_password($password).PHP_EOL;