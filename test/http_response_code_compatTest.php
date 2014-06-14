<?php

// NOTE this needs to be tested on < php 5.3 to make any sense

require __DIR__.'./../lib/http_response_code_compat.php'; // XXX auto loading

class http_response_code_compatTest extends \PHPUnit_Framework_TestCase
{
    function test1()
    {
        // FIXME xdebug_get_headers() dont seem to return the status headers
        http_response_code(404);

        $this->assertTrue(in_array('Status: 404 Not Found', xdebug_get_headers()));
    }
}
