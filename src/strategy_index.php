<?php

use Danilo\DesingPatterns\strategy\behavior\fly_behavior\fly_concret\FlyWithWings;
use Danilo\DesingPatterns\strategy\behavior\quack_behavior\quack_concret\Sneack;
use Danilo\DesingPatterns\strategy\duck\duck_tips\Decoy;
use Danilo\DesingPatterns\strategy\duck\duck_tips\Mallard;
use Danilo\DesingPatterns\strategy\duck\duck_tips\Model;
use Danilo\DesingPatterns\strategy\duck\duck_tips\RedHead;
use Danilo\DesingPatterns\strategy\duck\duck_tips\Rubber;

require_once("../vendor/autoload.php");

$decoy = new Decoy();
$decoy->display();
$decoy->performQuack();
$decoy->performFly();
$decoy->swim();

echo "\n";

$redHead = new RedHead();
$redHead->display();
$redHead->performQuack();
$redHead->performFly();
$redHead->swim();

echo "\n";

$rubber = new Rubber();
$rubber->display();
$rubber->performQuack();
$rubber->performFly();
$rubber->swim();

echo "\n";

$mallard = new Mallard();
$mallard->display();
$mallard->performQuack();
$mallard->performFly();
$mallard->swim();

echo"\n";

$model = new Model();
$model->display();
$model->performQuack();
$model->performFly();
$model->swim();
echo"Change the atribute values with set methods\n";
$model->setFlyBehavior(new FlyWithWings());
$model->setQuackBehavior(new Sneack());
$model->performFly();
$model->performQuack();