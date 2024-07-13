<?php

namespace Danilo\DesingPatterns\strategy\behavior\quack_behavior\quack_concret;

use Danilo\DesingPatterns\strategy\behavior\quack_behavior\QuackBehavior;

class Mute implements QuackBehavior
{
    public function quack(): void
    {
        echo "NO SOUND !\n";
    }
}
