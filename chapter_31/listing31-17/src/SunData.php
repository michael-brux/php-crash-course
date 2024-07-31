<?php

namespace Mattsmithdev;

class SunData
{
    private \DateTimeImmutable $sunrise;
    private \DateTimeImmutable $sunset;
    private \DateInterval $hoursDaylight;

    public function __construct(\DateTimeImmutable $date, float $latitude, float $longitude)
    {
        $timestamp = $date->getTimestamp();
        $data = date_sun_info($timestamp, $latitude, $longitude);

        $this->sunrise = $this->dateFromTimestamp($data['sunrise']);
        $this->sunset = $this->dateFromTimestamp($data['sunset']);
        $this->hoursDaylight = $this->sunset->diff($this->sunrise);
    }

    private function dateFromTimestamp(int $timestamp): \DateTimeImmutable
    {
        return (new \DateTimeImmutable())->setTimestamp($timestamp);
    }

    public function getSunrise(): \DateTimeImmutable
    {
        return $this->sunrise;
    }

    public function getSunset(): \DateTimeImmutable
    {
        return $this->sunset;
    }

    public function getHoursDaylight(): \DateInterval
    {
        return $this->hoursDaylight;
    }

}