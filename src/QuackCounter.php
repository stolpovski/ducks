<?php

namespace ducks;

class QuackCounter implements Quackable
{
    private Quackable $duck;
    private static int $numberOfQuacks = 0;

    public function __construct(Quackable $duck)
    {
        $this->duck = $duck;
    }

    public function quack(): void
    {
        $this->duck->quack();
        self::$numberOfQuacks++;
    }

    public static function getQuacks(): int
    {
        return self::$numberOfQuacks;
    }
}
