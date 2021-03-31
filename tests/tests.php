<?php

use PHPUnit\Framework\TestCase;

require '../functions.php';

class Tests extends TestCase
{
    public function testDisplayChairs_success1()
    {
        $test_array = [[
            'chairname' => 'highchair',
            'designer' => 'gary',
            'designyear' => '2001'
        ]];
        $result = displayChairs($test_array);
        $expected = '<div class="chairtitle"><h3>highchair' . '</h3></div>' . '<div class="chairinfo"><span>Designer: gary' . '</span><br/>' . '<span>Year: 2001' . '</span><br/></div>';
        $this->assertEquals($result, $expected);
    }

    public function testDisplayChairs_failure1()
    {
        $test_array2 = [];
        $result = displayChairs($test_array2);
        $expected = "This database is empty!";
        $this->assertEquals($result, $expected);
    }

    public function testDisplayChairs_malformed1()
    {
        $this->expectException(TypeError::class);
        displayChairs(false);
    }

}