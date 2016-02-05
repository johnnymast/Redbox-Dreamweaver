<?php
namespace Redbox\Dreamweaver;

class Dreamweaver
{
    /**
     * Encode a given password
     *
     * @param string $string
     * @return string
     */
    public static function encode_password($string = '') {
        $items = [];
        $len = strlen($string);
        for ($i = 0; $i < $len; $i++)
        {
            $items[] = dechex( ord($string[$i]) + $i ) ;
        }
        return strtoupper(implode('', $items));
    }

    /**
     * Decode a given password.
     *
     * @param string $encoded
     * @return string
     */
    public static function decode_password($encoded = '') {
        $literals = explode(' ', wordwrap($encoded, 2, ' ', 2));
        $password = '';
        for ($i = 0; $i < count($literals); $i++) {
            $password .= chr(hexdec($literals[$i]) - $i);
        }

        return $password;
    }
}