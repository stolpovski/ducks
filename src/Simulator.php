<?php

namespace ducks;

class Simulator
{
    public function run()
    {
        $mallardDuck = new QuackCounter(new MallardDuck());
        $rubberDuck = new QuackCounter(new RubberDuck());
        $gooseDuck = new GooseAdapter(new Goose());

        $this->simulate($mallardDuck);
        $this->simulate($rubberDuck);
        $this->simulate($gooseDuck);

        echo 'The ducks quacked times: ' . QuackCounter::getQuacks() . PHP_EOL;
    }

    private function simulate(Quackable $duck): void
    {
        $duck->quack();
        echo PHP_EOL;
    }
}
