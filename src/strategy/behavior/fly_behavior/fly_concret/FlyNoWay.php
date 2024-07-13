<?php

namespace Danilo\DesingPatterns\strategy\behavior\fly_behavior\fly_concret;

use Danilo\DesingPatterns\strategy\behavior\fly_behavior\FlyBehavior;

class FlyNoWay implements FlyBehavior
{
    public function fly(): void
    {
        echo "I dont Fly !!\n";
    }
}
