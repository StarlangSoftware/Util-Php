<?php

namespace olcaytaner\Util;

use PHPUnit\Framework\TestCase;

class PermutationTest extends TestCase
{
    public function testNext1(){
        $permutation = new Permutation(3);
        $firstPermutation = $permutation->get();
        $this->assertEquals([0, 1, 2], $firstPermutation);
        $count = 1;
        while ($permutation->next()){
            $count++;
        }
        $this->assertEquals(6, $count);
    }

    public function testNext2(){
        $permutation = new Permutation(5);
        $firstPermutation = $permutation->get();
        $this->assertEquals([0, 1, 2, 3, 4], $firstPermutation);
        $count = 1;
        while ($permutation->next()){
            $count++;
        }
        $this->assertEquals(120, $count);
    }

}
