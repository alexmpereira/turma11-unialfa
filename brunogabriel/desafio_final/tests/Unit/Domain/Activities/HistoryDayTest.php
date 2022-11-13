<?php

namespace Tests\Unit\Domain\Entity;

use App\Domain\Entity\HistoryDay;
use PHPUnit\Framework\TestCase;

class HistoryDayTest extends TestCase
{
    public function testIfTheMethodHistoryDayExists()
    {
        $this->assertTrue(
            method_exists(new HistoryDay(), 'historyday'),
            "the class does not have the method hsitoryday"
        );

    }
    public function testIfTheMethodStartCarExists()
    {
        $this->assertTrue(
            method_exists(new HistoryDay(), 'startcar'),
            "the class does not have the method startcar"
        );

    }
    public function testIfTheMethodOffCarExists()
    {
        $this->assertTrue(
            method_exists(new HistoryDay(), 'offCar'),
            "the class does not have the method offCar"
        );

    }
    public function testIfTheMethodRefuelCarExists()
    {
        $this->assertTrue(
            method_exists(new HistoryDay(), 'refuelCar'),
            "the class does not have the method refuelCar"
        );

    }
    public function testIfTheMethodChangeCarOilExists()
    {
        $this->assertTrue(
            method_exists(new HistoryDay(), 'changeCarOil'),
            "the class does not have the method changeCarOil"
        );

    }
    public function testIfTheMethodReviewCarExists()
    {
        $this->assertTrue(
            method_exists(new HistoryDay(), 'reviewCar'),
            "the class does not have the method reviewCar"
        );

    }
}