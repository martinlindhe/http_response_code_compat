<?php

class http_response_code_compatTest extends \PHPUnit_Framework_TestCase
{
    function isVersionTooNew()
    {
        $version = explode('.', PHP_VERSION);

        if (($version[0] == 5 && $version[1] >= 4) || $version[0] > 5) {
            return true;
        }

        return false;
    }

    function testReturnCode()
    {
        if ($this->isVersionTooNew()) {
            $this->markTestSkipped('Only runs on php < 5.4');
        }

        $this->assertEquals(404, http_response_code(404));
    }
}
