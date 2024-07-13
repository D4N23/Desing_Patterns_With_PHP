<?php

namespace Danilo\DesingPatterns\strategy\behavior\fly_behavior\fly_concret;

use Danilo\DesingPatterns\strategy\behavior\fly_behavior\FlyBehavior;

class FlyWithWings implements FlyBehavior
{
    public function fly(): void
    {
        echo "Fly On Sky\n";
    }
}
