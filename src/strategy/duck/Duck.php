<?php

namespace Danilo\DesingPatterns\strategy\duck;

use Danilo\DesingPatterns\strategy\behavior\fly_behavior\FlyBehavior;
use Danilo\DesingPatterns\strategy\behavior\quack_behavior\QuackBehavior;

abstract class Duck
{
    
    
    public function __construct(protected FlyBehavior $flyBehavior, protected QuackBehavior $quackBehavior)
    {
        // $this->flyBehavior = $flyBehavior;
        // $this->quackBehavior = $quackBehavior;
    }

    public function performQuack():void
    {
        $this->quackBehavior->quack();
    } 

    public function performFly():void
    {
        $this->flyBehavior->fly();
    }

    public function setFlyBehavior(FlyBehavior $fb):void
    {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb):void
    {
        $this->quackBehavior = $qb;
    }
    public abstract function display(): void;
    function swim(): void
    {
        echo "Duck to Swiming\n";
    }
}
