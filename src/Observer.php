<?php

namespace ducks;

interface Observer
{
    public function update(QuackObservable $duck): void;
}
