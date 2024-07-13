<?php

namespace Danilo\DesingPatterns\strategy\duck\duck_tips;

use Danilo\DesingPatterns\strategy\behavior\fly_behavior\fly_concret\FlyWithWings;
use Danilo\DesingPatterns\strategy\behavior\fly_behavior\FlyBehavior;
use Danilo\DesingPatterns\strategy\behavior\quack_behavior\quack_concret\Grasnar;
use Danilo\DesingPatterns\strategy\behavior\quack_behavior\QuackBehavior;
use Danilo\DesingPatterns\strategy\duck\Duck;

class Mallard extends Duck
{
    public function __construct(
        protected  QuackBehavior $quackBehavior = new Grasnar(),
        protected  FlyBehavior $flyBehavior = new FlyWithWings()
    ) {
    }

    public function display(): void
    {
        echo "I Am are Mallard Duck\n";
    }
}
