<?php

use olcaytaner\Util\Subset;
use PHPUnit\Framework\TestCase;

class SubsetTest extends TestCase
{
    public function testNext1(){
        $subset = new Subset(1, 10, 5);
        $firstSubset = $subset->get();
        $this->assertEquals([1, 2, 3, 4, 5], $firstSubset);
        $count = 1;
        while ($subset->next()){
            $count++;
        }
        $this->assertEquals(252, $count);
    }

    public function testNext2(){
        $subset = new Subset(1, 20, 3);
        $firstSubset = $subset->get();
        $this->assertEquals([1, 2, 3], $firstSubset);
        $count = 1;
        while ($subset->next()){
            $count++;
        }
        $this->assertEquals(1140, $count);
    }

    public function testNext3(){
        $count = 0;
        for ($i = 0; $i <= 10; $i++){
            $subset = new Subset(1, 10, $i);
            $count++;
            while ($subset->next()){
                $count++;
            }
        }
        $this->assertEquals(1024, $count);
    }

}
