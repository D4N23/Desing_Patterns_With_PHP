<?php

namespace Danilo\DesingPatterns\observer\observers;

interface Observer
{
    function update(float $temperature, float $humidity, float $pressure):void;
}
