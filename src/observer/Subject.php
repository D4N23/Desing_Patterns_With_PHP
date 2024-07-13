<?php

namespace Danilo\DesingPatterns\observer;

use Danilo\DesingPatterns\observer\observers\Observer;

interface Subject
{
    function registerObserver(Observer $o): void;
    function removeObserver(Observer $o): void;
    function notifyObservers(): void;
}
