<?php

namespace ducks;
use ArrayObject;

class Observable implements QuackObservable
{
    private ArrayObject $observers;
    private QuackObservable $duck;

    public function __construct(QuackObservable $duck)
    {
        $this->observers = new ArrayObject();
        $this->duck = $duck;
    }

    public function registerObserver(Observer $observer): void
    {
        $this->observers->append($observer);
    }

    public function notifyObservers(): void
    {
        $iterator = $this->observers->getIterator();
        while ($iterator->valid()) {
            $observer = $iterator->current();
            $observer->update($this->duck);

            $iterator->next();
        }
    }
}
