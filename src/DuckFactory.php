<?php

namespace ducks;

class DuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck(): Quackable
    {
        return new MallardDuck();
    }

    public function createRubberDuck(): Quackable
    {
        return new RubberDuck();
    }
}
