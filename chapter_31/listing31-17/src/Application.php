<?php

namespace Mattsmithdev;

class Application
{
    public function run(): void
    {
        $action = filter_input(INPUT_GET, 'action');
        
        switch ($action) {
            case 'processForm':
                $address = filter_input(INPUT_POST, 'address');
                $date = filter_input(INPUT_POST, 'date');

                if (empty($address) || empty($date)) {
                    $this->homepage('you must enter a valid address and a date');
                } else {
                    $this->processForm($date, $address);
                }
                break;

            default:
                $this->homepage();
        }
    }

    private function homepage(string $errorMessage = ''): void
    {
        require_once __DIR__ . '/../templates/homepage.php';
    }

    private function processForm(string $dateString, string $address): void
    {
        try {
            $streetMapper = new StreetMap();
            $latLongArray = $streetMapper->getOpenStreetMapData($address);
            $latitude = $latLongArray['latitude'];
            $longitude = $latLongArray['longitude'];

            $date = new \DateTimeImmutable($dateString);
            $sunData = new SunData($date, $latitude, $longitude);
            $sunrise = $sunData->getSunrise()->format('g:ia');
            $sunset = $sunData->getSunset()->format('g:ia');
            $hoursDaylight = $sunData->getHoursDaylight()->format("%h hours %i minutes");

            require_once __DIR__ . '/../templates/result.php';
        } catch (\Exception) {
            print 'sorry - an error occurred trying to retrieve data from Open Street Map';
            print '<br>';
            print '<a href="/">home</a>';
        }
    }
}