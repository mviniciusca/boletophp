<?php

require_once "../include/funcoes.php";

class TestModulo11 extends PHPUnit_Framework_TestCase {
    function testeCodigoDoBanco(){
        $this->assertEquals(modulo_11("104"), 0);
    }
}


?>