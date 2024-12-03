<?php

namespace olcaytaner\Util;

class Subset
{
    protected array $set;
    private int $rangeEnd;
    protected int $elementCount;

    /**
     * The constructor of {@link Subset} class which takes 3 integer inputs; rangeStart, rangeEnd, and elementCount.
     * It initializes variables rangeEnd and elementCount with given inputs, creates 2 arrays; set and multiset with the
     * size of given elementCount and multisetCount, which is derived from elementCount, respectively. Then, it assigns
     * rangeStart+i to each ith element of set {@link Array}.
     *
     * @param int $rangeStart integer input defining start range.
     * @param int $rangeEnd integer input defining ending range.
     * @param int $elementCount integer input element count.
     */
    public function __construct(int $rangeStart, int $rangeEnd, int $elementCount)
    {
        $this->set = [];
        $this->rangeEnd = $rangeEnd;
        $this->elementCount = $elementCount;
        for ($i = 0; $i < $elementCount; $i++) {
            $this->set[] = $rangeStart + $i;
        }
    }

    /**
     * Getter for the set {@link Array}.
     *
     * @return array the set {@link Array}.
     */
    public function get(): array
    {
        return $this->set;
    }

    /**
     * The next method generates the next subset.
     *
     * @return bool true if next subset generation is possible, false otherwise.
     */
    public function next(): bool
    {
        for ($i = $this->elementCount - 1; $i > -1; $i--) {
            $this->set[$i]++;
            if ($this->set[$i] <= $this->rangeEnd - $this->elementCount + $i + 1) {
                break;
            }
        }
        if ($i == -1) {
            return false;
        }
        for ($j = $i + 1; $j < $this->elementCount; $j++) {
            $this->set[$j] = $this->set[$j - 1] + 1;
        }
        return true;

    }
}