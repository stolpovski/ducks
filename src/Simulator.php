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
        // $mallardDuck = $this->duckFactory->createMallardDuck();
        // $rubberDuck = $this->duckFactory->createRubberDuck();
        // $gooseDuck = new GooseAdapter(new Goose());

        // $flock = new Flock();
        // $flock->add($mallardDuck);
        // $flock->add($rubberDuck);
        // $flock->add($gooseDuck);

        $mallardDuckOne = $this->duckFactory->createMallardDuck();
        $mallardDuckTwo = $this->duckFactory->createMallardDuck();
        $mallardDuckThree = $this->duckFactory->createMallardDuck();

        $mallardFlock = new Flock();
        $mallardFlock->add($mallardDuckOne);
        $mallardFlock->add($mallardDuckTwo);
        $mallardFlock->add($mallardDuckThree);

        $quackologist = new Quackologist();
        $mallardFlock->registerObserver($quackologist);

        $this->simulate($mallardFlock);

        

        // echo 'Whole flock:' . PHP_EOL;
        // $this->simulate($flock);

        // echo 'Mallard flock:' . PHP_EOL;
        // $this->simulate($mallardFlock);

        echo 'The ducks quacked times: ' . QuackCounter::getQuacks() . PHP_EOL;
    }

    private function simulate(QuackObservable $duck): void
    {
        $duck->quack();
    }
}
