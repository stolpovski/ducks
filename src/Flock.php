<?php

namespace ducks;

use ArrayObject;
use Exception;

class Flock implements Quackable
{
    private ArrayObject $quackers;

    public function __construct()
    {
        $this->quackers = new ArrayObject();
    }

    public function registerObserver(Observer $observer): void
    {
        $iterator = $this->quackers->getIterator();

        while ($iterator->valid()) {
            $quacker = $iterator->current();
            $quacker->registerObserver($observer);

            $iterator->next();
        }

    }

    public function notifyObservers(): void
    {
        
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
