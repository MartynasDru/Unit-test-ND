<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use App\Service\NumberFormatter;
use App\Service\MoneyFormatter;

class MoneyFormatterTest extends TestCase
{
    public function testEurFormatter()
    {
        $formatNumber = $this->createMock(NumberFormatter::class);
        $formatNumber->expects($this->once())
            ->method("format")
            ->with(999500)
            ->willReturn("1M");

        $formatNumber = new MoneyFormatter($formatNumber);
        $this->assertEquals(
            "1M €",
            $formatNumber->eurFormatter(999500)
        );
    }
    
    public function testFormatUsd()
    {
        $numberFormatter = $this->createMock(NumberFormatter::class);
        $numberFormatter->expects($this->once())
            ->method("format")
            ->with(999500)
            ->willReturn("1M");
        $moneyFormatter = new MoneyFormatter($numberFormatter);
        $this->assertEquals(
            "$1M",
            $moneyFormatter->usdFormatter(999500)
        );
    }
}