<?php

namespace olcaytaner\Util;

class Interval
{
    private array $list;

    /**
     * A constructor of {@link Interval} class which creates a new {@link Array} list.
     */
    public function __construct()
    {
        $this->list = [];
    }

    /**
     * The add method adds a new {@link Tuple} with given inputs to the list.
     *
     * @param int $start first element of {@link Tuple}.
     * @param int $end second element of {@link Tuple}.
     */
    public function add(int $start, int $end): void
    {
        $this->list[] = new Tuple($start, $end);
    }

    /**
     * The getFirst method returns the first element at the list {@link Array}'s given index.
     *
     * @param int $index to use at getting tuple from {@link Array}.
     * @return int the first element at the list {@link Array}'s given index.
     */
    public function getFirst(int $index): int
    {
        return $this->list[$index].getFirst();
    }

    /**
     * The getLast method returns the last element at the list {@link Array}'s given index.
     *
     * @param int $index to use at getting tuple from {@link Array}.
     * @return int the last element at the list {@link Array}'s given index.
     */
    public function getLast(int $index): int
    {
        return $this->list[$index].getLast();
    }

    /**
     * The size method returns the size of the list {@link Array}.
     *
     * @return int size of the list {@link Array}.
     */
    public function size(): int
    {
        return count($this->list);
    }

}