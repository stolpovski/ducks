<?php

namespace ducks;

class CountingDuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck(): Quackable
    {
        return new QuackCounter(new MallardDuck());
    }

    public function createRubberDuck(): Quackable
    {
        return new QuackCounter(new RubberDuck());
    }
}
