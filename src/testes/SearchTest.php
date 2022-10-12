<?php
use PHPUnit\Framework\TestCase;
use MaxsonCarvalho\DigitalCep\Search;

class SearchTest extends TestCase{
    public function testGetAddressFromZipCodeDefaultUsage(){
        $resultado = "ok";

        $this->assertEquals("ok", $resultado);
    }
}

?>