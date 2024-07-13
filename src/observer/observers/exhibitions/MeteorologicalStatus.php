<?php

namespace Danilo\DesingPatterns\observer\observers\exhibitions;

use Danilo\DesingPatterns\observer\observers\Observer;
use Danilo\DesingPatterns\observer\Subject;
use Danilo\DesingPatterns\observer\observers\exhibitions\display\DisplayElement;


class MeteorologicalStatus implements Observer, DisplayElement
{
    private float $maxTemp = 0.0;
    private float $minTemp = 200;
    private float $tempSum = 0.0;
    private int $numReadings = 0;

    protected Subject $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $weatherData->registerObserver($this);
    }
    public function display(): void
    {
        $media = $this->tempSum / $this->numReadings;
        $formated = number_format($media, 1);
        echo "Avg/Max/Min temperature: \n";
        echo $formated . "/" . $this->maxTemp . "/" . $this->minTemp . "\n";
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->tempSum += $temperature;
        $this->numReadings++;

        if ($temperature > $this->maxTemp) {
            $this->maxTemp = $temperature;
        }
        if ($temperature < $this->minTemp) {
            $this->minTemp = $temperature;
        }

        $this->display();
    }
}
