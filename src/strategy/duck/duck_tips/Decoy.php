<?php

namespace Danilo\DesingPatterns\strategy\duck\duck_tips;

use Danilo\DesingPatterns\strategy\behavior\fly_behavior\fly_concret\FlyNoWay;
use Danilo\DesingPatterns\strategy\behavior\fly_behavior\FlyBehavior;
use Danilo\DesingPatterns\strategy\behavior\quack_behavior\quack_concret\Mute;
use Danilo\DesingPatterns\strategy\behavior\quack_behavior\QuackBehavior;
use Danilo\DesingPatterns\strategy\duck\Duck;

class Decoy extends Duck
{
    public function __construct(
        protected QuackBehavior $quackBehavior = new Mute(),
        protected FlyBehavior $flyBehavior = new FlyNoWay()
    ) {
    }

    public function display(): void
    {
        echo "I Am are Decoy Duck\n";
    }
}
