<?php

require_once __DIR__ . '/vendor/autoload.php';

use ducks\Simulator;
use ducks\CountingDuckFactory;
use ducks\DuckFactory;

(new Simulator(new CountingDuckFactory()))->run();
