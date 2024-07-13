<?php

namespace Danilo\DesingPatterns\observer\observers\exhibitions;

use Danilo\DesingPatterns\observer\observers\exhibitions\display\DisplayElement;
use Danilo\DesingPatterns\observer\observers\Observer;
use Danilo\DesingPatterns\observer\Subject;

class CurrentConditions implements Observer, DisplayElement
{
    protected float $temperature;
    protected float $humidity;
    protected float $pressure;
    protected Subject $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }

    public function display(): void
    {   echo"----------------------\n";
        echo "Current Conditions: \n";
        echo $this->temperature ." F degrees and " . $this->humidity . "% humidity and pressure:" . $this->pressure . "\n";
        echo "------------------\n";
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {   
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->display();
    }
}
