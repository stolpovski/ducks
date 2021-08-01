<?php

namespace ducks;

abstract class AbstractDuckFactory
{
    abstract public function createMallardDuck(): Quackable;
    abstract public function createRubberDuck(): Quackable;
}
