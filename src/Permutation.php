<?php

namespace olcaytaner\Util;

class Permutation
{
    private array $a;
    private int $n;

    /**
     * A constructor of {@link Permutation} class which creates a new {@link Array} and assigns integer
     * numbers starting from 0 to given input n.
     *
     * @param int $n integer input.
     */
    public function __construct(int $n)
    {
        $this->n = $n;
        $this->a = [];
        for ($i = 0; $i < $n; $i++) {
            $this->a[] = $i;
        }
    }

    /**
     * The get method returns the {@link Array} a.
     *
     * @return array Array a.
     */
    public function get(): array
    {
        return $this->a;
    }

    /**
     * The next method generates next permutation for the {@link Array} a.
     *
     * @return bool true if next permutation is possible, false otherwise.
     */
    public function next(): bool
    {
        $i = $this->n - 2;
        while ($i >= 0 && $this->a[$i] >= $this->a[$i + 1]) {
            $i--;
        }
        if ($i == -1) {
            return false;
        }
        $j = $this->n - 1;
        while ($this->a[$i] >= $this->a[$j]) {
            $j--;
        }
        $tmp = $this->a[$i];
        $this->a[$i] = $this->a[$j];
        $this->a[$j] = $tmp;
        $k = $i + 1;
        $j = $this->n - 1;
        while ($k < $j) {
            $tmp = $this->a[$k];
            $this->a[$k] = $this->a[$j];
            $this->a[$j] = $tmp;
            $k++;
            $j--;
        }
        return true;
    }
}