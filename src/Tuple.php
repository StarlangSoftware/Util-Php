<?php

namespace olcaytaner\Util;

class Tuple
{
    private int $first;
    private int $last;

    /**
     * The constructor of {@link Tuple} class which takes two integer inputs and initializes first and last variables
     * with given inputs.
     *
     * @param int $first integer input.
     * @param int $last  integer input.
     */
    public function __construct(int $first, int $last)
    {
        $this->first = $first;
        $this->last = $last;
    }

    /**
     * Getter for the first item at {@link Tuple}.
     *
     * @return int the first item.
     */
    public function getFirst(): int
    {
        return $this->first;
    }

    /**
     * Getter for the last item at {@link Tuple}.
     *
     * @return int the last item.
     */
    public function getLast(): int
    {
        return $this->last;
    }
}