<?php

/**
 * @@coversDefaultClass  \Redbox\Dreamweaver\Dreamweaver
 */
class DreamweaverTest extends \PHPUnit_Framework_TestCase
{

    public function testDreamweaverEncode() {
        $src = 'Hard2CrackPassword1982AplhaBravoDelta';
        $this->assertEquals(\Redbox\Dreamweaver\Dreamweaver::encode_password($src), '48627467364878686B745A6C7F80857E8275434C4C47578784817B5D8E7E948E64868E9785');
    }

    public function testDreamweaverDecode() {
        $src = '48627467364878686B745A6C7F80857E8275434C4C47578784817B5D8E7E948E64868E9785';
        $this->assertEquals(\Redbox\Dreamweaver\Dreamweaver::decode_password($src), 'Hard2CrackPassword1982AplhaBravoDelta');
    }
}

