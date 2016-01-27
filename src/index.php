<?php

class Dreamweaver {

    public static function encode_password($string = '') {
        $items = [];
        $len = strlen($string);
        for ($i = 0; $i < $len; $i++)
        {
            $items[] = dechex( ord($string[$i]) + $i ) ;
        }
        return strtoupper(implode('', $items));
    }

    public static function decode_password($encoded = '') {
        $literals = explode(' ', wordwrap($encoded, 2, ' ', 2));
        $password = '';
        for ($i = 0; $i < count($literals); $i++) {
            $password .= chr(hexdec($literals[$i]) - $i);
        }

        return $password;
    }
}

$pass = '505572726E465E4D';

echo '@@'.Dreamweaver::decode_password($pass);