<?php

namespace ducks;

class RubberDuck implements Quackable
{
    public function quack(): void
    {
        echo 'Squeak';
    }
}
