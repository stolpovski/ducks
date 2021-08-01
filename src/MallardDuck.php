<?php

namespace ducks;

class MallardDuck implements Quackable
{
    public function quack(): void
    {
        echo 'Quack' . PHP_EOL;
    }
}
