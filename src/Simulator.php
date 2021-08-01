<?php

namespace ducks;

class Simulator
{
    public function run()
    {
        $mallardDuck = new MallardDuck();
        $rubberDuck = new RubberDuck();
        $gooseDuck = new GooseAdapter(new Goose());

        $this->simulate($mallardDuck);
        $this->simulate($rubberDuck);
        $this->simulate($gooseDuck);
    }

    private function simulate(Quackable $duck): void
    {
        $duck->quack();
        echo PHP_EOL;
    }
}
