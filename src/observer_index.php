<?php 
use Danilo\DesingPatterns\observer\observers\exhibitions\CurrentConditions;
use Danilo\DesingPatterns\observer\observers\exhibitions\Forecast;
use Danilo\DesingPatterns\observer\observers\exhibitions\HeatIndex;
use Danilo\DesingPatterns\observer\observers\exhibitions\MeteorologicalStatus;
use Danilo\DesingPatterns\observer\WeatherData;

require_once("../vendor/autoload.php");

$wetherData = new WeatherData();

$currentConditionDisplay = new CurrentConditions($wetherData);
$meteorologicalStatus = new MeteorologicalStatus($wetherData);
$forecastDisplay = new Forecast($wetherData);
$heatIndex = new HeatIndex($wetherData);

$wetherData->setMeasurements(80.8, 65, 30.40);
$wetherData->setMeasurements(80.2, 64, 34.40);
$wetherData->setMeasurements(80.0, 35, 31.42);
$wetherData->setMeasurements(80.2, 62, 30.43);