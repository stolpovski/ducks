<?php

namespace ducks;

interface Quackable extends QuackObservable
{
    public function quack(): void;
}
