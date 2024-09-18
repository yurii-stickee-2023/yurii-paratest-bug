<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class DummyTest extends TestCase
{
    public static function providesData()
    {
        $range = range(0, 100);

        foreach ($range as $item) {
            yield [$item];
        }
    }

    /**
     * @dataProvider providesData
     */
    public function testDummy1()
    {
        $this->assertTrue(true);
    }
}
