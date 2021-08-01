<?php

namespace ducks;

use ArrayObject;

class Flock implements Quackable
{
    private ArrayObject $quackers;

    public function __construct()
    {
        $this->quackers = new ArrayObject();
    }

    public function add(Quackable $quacker): void
    {
        $this->quackers->append($quacker);
    }

    public function quack(): void
    {
        $iterator = $this->quackers->getIterator();

        while ($iterator->valid()) {
            $quacker = $iterator->current();
            $quacker->quack();

            $iterator->next();
        }
    }
}
