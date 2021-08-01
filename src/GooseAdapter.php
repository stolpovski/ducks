<?php

namespace ducks;

class GooseAdapter implements Quackable
{
    private Goose $goose;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
    }

    public function quack(): void
    {
        $this->goose->honk();
    }
}
