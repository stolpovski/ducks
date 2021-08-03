<?php

namespace ducks;

class MallardDuck implements Quackable
{
    private Observable $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function registerObserver(Observer $observer): void
    {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers(): void
    {
        $this->observable->notifyObservers();
    }

    public function quack(): void
    {
        echo 'Quack' . PHP_EOL;
        $this->notifyObservers();
    }

    public function __toString()
    {
        return __CLASS__;
    }
}
