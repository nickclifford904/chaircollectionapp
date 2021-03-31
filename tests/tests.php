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
            'designyear' => '2001',
            'imageLink' => 'https://picsum.photos/200/300'
        ]];
        $result = displayChairs($test_array);
        $expected = '<div class="chairtitle"><h3>highchair</h3></div><div class="chairinfo"><img src="" height="250"  alt="A lovely chair" /><br><span>Designer: gary</span><br><span>Year: 2001</span><br></div><form method="post" action="index.php"><input name="delete" type="submit" value="Remove this chair from the collection" /><input type="hidden" name="id" value="" /></form>';
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