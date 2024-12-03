<?php

namespace olcaytaner\Util;

use PHPUnit\Framework\TestCase;

class RandomArrayTest extends TestCase
{
    public function testNormalizedArray(){
        $array = RandomArray::normalizedArray(10);
        $sum = 0.0;
        for ($i = 0; $i < 10; $i++){
            $sum += $array[$i];
        }
        $this->assertEquals($sum, 1.0);
    }

    public function testIndexArray(){
        $array = RandomArray::indexArray(10, 0);
        $sum = 0.0;
        for ($i = 0; $i < 10; $i++){
            $sum += $array[$i];
        }
        $this->assertEquals($sum, 45);
    }

}
