<?php

namespace Danilo\DesingPatterns\observer;

use Danilo\DesingPatterns\observer\observers\Observer;

class WeatherData implements Subject
{
    private array $observers;
    private float $temperature;

    private float $humidity;

    private float $pressure;
    

    public function __construct(array $observers = [])
    {
        $this->observers = $observers;
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }

    public function registerObserver(Observer $o): void
    {
        array_push($this->observers, $o);
    }

    public function removeObserver(Observer $o): void
    {
        $i = array_search($o, $this->observers);
        if ($i !== false) {
            unset($this->observers[$i]);
            $this->observers = array_values($this->observers);
        }
    }
    public function notifyObservers(): void
    {
        for ($i = 0; $i < count($this->observers); $i++) {
            $observer = $this->observers[$i];
            $observer->update($this->getTemperature(), $this->getHumidity(), $this->getPressure());
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

}
