<?php

namespace Danilo\DesingPatterns\observer\observers\exhibitions;


use Danilo\DesingPatterns\observer\observers\Observer;
use Danilo\DesingPatterns\observer\Subject;
use Danilo\DesingPatterns\observer\observers\exhibitions\display\DisplayElement;


class Forecast implements Observer, DisplayElement
{
    private float $currentPressure = 29.92;  
	private float $lastPressure;
    protected Subject $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }
    public function display(): void
    {   echo "------------------\n";
        echo "Forecast: \n";
        if ($this->currentPressure > $this->lastPressure) {
			echo "Improving weather on the way!\n";
		} else if ($this->currentPressure == $this->lastPressure) {
			echo "More of the same \n";
		} else if ($this->currentPressure < $this->lastPressure) {
			echo "Watch out for cooler, rainy weather \n";
		}
        echo"---------------------\n";
    
    }
    public function update(float $temperature, float $humidity, float $pressure):void
    {
        $this->lastPressure = $this->currentPressure;
		$this->currentPressure = $pressure;
        $this->display();
    }
}
