<?php

namespace Danilo\DesingPatterns\strategy\behavior\quack_behavior\quack_concret;

use Danilo\DesingPatterns\strategy\behavior\quack_behavior\QuackBehavior;

class Sneack implements QuackBehavior
{
    public function quack(): void
    {
        echo "SNEAAAAAAAAACK !!\n";
    }
}
