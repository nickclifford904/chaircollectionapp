<?php

use PHPUnit\Framework\TestCase;

require '../functions.php';

class tests extends TestCase
{
    public function testDisplayChairs_success1()
    {
        $test_array = [[
            'chairname' => 'highchair',
            'designer' => 'gary',
            'designyear' => '2001'
        ]];
        $result = displayChairs($test_array);
        $expected = '<h3>highchair' . '</h3>' . '<span>Designer: gary' . '</span><br/>' . '<span>Year: 2001' . '</span><br/>';
        $this->assertEquals($result, $expected);
    }
}