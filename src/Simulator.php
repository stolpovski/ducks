<?php

namespace ducks;

class Simulator
{
    private AbstractDuckFactory $duckFactory;

    public function __construct(AbstractDuckFactory $duckFactory)
    {
        $this->duckFactory = $duckFactory;
    }

    public function run(): void
    {
        $mallardDuck = $this->duckFactory->createMallardDuck();
        $rubberDuck = $this->duckFactory->createRubberDuck();
        $gooseDuck = new GooseAdapter(new Goose());

        $flock = new Flock();
        $flock->add($mallardDuck);
        $flock->add($rubberDuck);

        $this->simulate($flock);

        echo 'The ducks quacked times: ' . QuackCounter::getQuacks() . PHP_EOL;
    }

    private function simulate(Quackable $duck): void
    {
        $duck->quack();
        echo PHP_EOL;
    }
}
