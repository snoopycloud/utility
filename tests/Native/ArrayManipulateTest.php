<?php

namespace SnoopyCloud\Tests\Utility\Native;

use SnoopyCloud\Utility\Native\ArrayManipulate;
use PHPUnit\Framework\TestCase;

class ArrayManipulateTest extends TestCase
{
    public function testManipulate()
    {
        $data = [
            "name" => "SnoopyCloud",
            "email" => null,
            "address" => [
                'number' => null,
                'sub' => [
                    'name' => null
                ]
            ]
        ];

        $expected = [
            "name" => "SnoopyCloud",
            "email" => '',
            "address" => [
                'number' => '',
                'sub' => [
                    'name' => ''
                ]
            ]
        ];

        ArrayManipulate::nullToEmpty($data);

        $this->assertSame($expected, $data);
}
}
