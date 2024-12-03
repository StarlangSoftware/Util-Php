<?php

namespace olcaytaner\Util;

class RandomArray
{
    /**
     * The constructor of {@link RandomArray} class gets an integer itemCount as an input. Creates an array of
     * size itemCount and loops through each element of the array and initializes them with a random number by using Math.random().
     * Then, accumulates each element of the array and at the end divides each element with the resulting sum.
     *
     * @param int $itemCount integer input defining array size.
     */
    static public function normalizedArray(int $itemCount): array
    {
        $sum = 0.0;
        $array = [];
        for ($i = 0; $i < $itemCount; $i++) {
            $array[$i] = mt_rand() / mt_getrandmax();
            $sum += $array[$i];
        }
        for ($i = 0; $i < $itemCount; $i++) {
            $array[$i] /= $sum;
        }
        return $array;
    }

    /**
     * Creates and returns a random index array, where the indexes in the array are between 0 and itemCount - 1. For
     * example, if itemCount is 4, the method returns an array of indexes 0, 1, 2, 3 but shuffled.
     * @param int $itemCount Number of indexes
     * @param int $seed Random seed
     * @return array Shuffled array containing numbers between 0 and itemCount - 1.
     */
    static public function indexArray(int $itemCount, int $seed): array
    {
        $array = [];
        for ($i = 0; $i < $itemCount; $i++) {
            $array[$i] = $i;
        }
        shuffle($array);
        return $array;
    }
}