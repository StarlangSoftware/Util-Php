<?php

use olcaytaner\Util\SubsetFromList;
use PHPUnit\Framework\TestCase;

class SubsetFromListTest extends TestCase
{
    public function testNext1(){
        $subset = new SubsetFromList([10, 20, 30, 40, 50, 60, 70, 80, 90, 100], 5);
        $firstSubset = $subset->get();
        $this->assertEquals([10, 20, 30, 40, 50], $firstSubset);
        $count = 1;
        while ($subset->next()){
            $count++;
        }
        $this->assertEquals(252, $count);
    }

    public function testNext2(){
        $subset = new SubsetFromList([9, 8, 2, 12, 7, 16, 17], 3);
        $firstSubset = $subset->get();
        $this->assertEquals([9, 8, 2], $firstSubset);
        $count = 1;
        while ($subset->next()){
            $count++;
        }
        $this->assertEquals(35, $count);
    }

    public function testNext3(){
        $count = 0;
        for ($i = 0; $i <= 9; $i++){
            $subset = new SubsetFromList([9, 8, 2, 12, 7, 16, 17, 8, 3], $i);
            $count++;
            while ($subset->next()){
                $count++;
            }
        }
        $this->assertEquals(512, $count);
    }

}
