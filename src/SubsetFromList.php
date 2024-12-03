<?php

namespace olcaytaner\Util;

class SubsetFromList extends Subset
{
    private array $elementList;
    private array $indexList;

    /**
     * A constructor of {@link SubsetFromList} class takes an integer list and an integer elementCount as inputs. It initializes
     * elementList and elementCount variables with given inputs, then creates 3 arrays; set,indexList, and multiset with the
     * size of given elementCount and multisetCount, which is derived from elementCount, respectively. Then, it assigns
     * i to each ith element of indexList {@link Array} and use this index to point at elementList and
     * assigns to set {@link Array}.
     *
     * @param array $list {@link Array} type input.
     * @param int $elementCount integer input element count.
     */
    public function __construct(array $list, int $elementCount)
    {
        parent::__construct(0, 0, 0);
        $this->elementList = $list;
        $this->elementCount = $elementCount;
        $this->set = [];
        $this->indexList = [];
        for ($i = 0; $i < $elementCount; $i++) {
            $this->indexList[] = $i;
            $this->set[] = $this->elementList[$this->indexList[$i]];
        }
    }

    /**
     * The next method generates the next subset from list.
     *
     * @return bool true if next subset generation from list is possible, false otherwise.
     */
    public function next(): bool
    {
        for ($i = $this->elementCount - 1; $i > -1; $i--) {
            $this->indexList[$i]++;
            if ($this->indexList[$i] < count($this->elementList) - $this->elementCount + $i + 1)
                break;
        }
        if ($i == -1)
            return false;
        $this->set[$i] = $this->elementList[$this->indexList[$i]];
        for ($j = $i + 1; $j < $this->elementCount; $j++) {
            $this->indexList[$j] = $this->indexList[$j - 1] + 1;
            $this->set[$j] = $this->elementList[$this->indexList[$j]];
        }
        return true;
    }
}