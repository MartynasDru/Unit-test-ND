<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Service\NumberFormatter;

class NumberFormatterTest extends TestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testFormat($number, $expected)
    {
        $numberFormatter = new NumberFormatter();
        $formatNumber = $numberFormatter->format($number);
        $this->assertEquals($expected, $formatNumber);
    }
    
    public function dataProvider()
    {
        return [
            [2835779, "2.84M"],
            [999500, "1.00M"],
            [535216, "535K"],
            [99950, "100K"],
            [27533.78, "27 534"],
            [999.99, "999.99"],
            [999.9999, "1 000"],
            [533.1, "533.1"],
            [66.6666, "66.67"],
            [12.00, "12"],
            [-123654.89, "-124K"],
        ];
    }
}