<?php

namespace Mattsmithdev;
class AudioClip
{
    const NUM_CHANNELS = 2;
    const BITS_PER_SAMPLE = 16;
    const SAMPLES_PER_SECOND = 44100;
    const BITS_PER_SECOND = self::NUM_CHANNELS * self::BITS_PER_SAMPLE * self::SAMPLES_PER_SECOND;

    // --- Static (per-class) members ---
    private static int $maxClipDurationSeconds = -1;

    public static function getMaxClipDurationSeconds(): int
    {
        return self::$maxClipDurationSeconds;
    }

    // --- Object (instance) members ---
    private string $title;
    private int $durationSeconds = 0;

    public function getSizeBits(): int
    {
        return self::BITS_PER_SECOND * $this->durationSeconds;
    }

    public function getSizeMegaBytes(): float
    {
        return SizeUtilities::bitsToMegaBytes($this->getSizeBits());
    }

    public function __construct(string $title, int $durationSeconds)
    {
        $this->setTitle($title);
        $this->setDurationSeconds($durationSeconds);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDurationSeconds(): int
    {
        return $this->durationSeconds;
    }

    public function setDurationSeconds(int $durationSeconds): void
    {
        // Exit with no action if negative
        if ($durationSeconds < 0) return;

        $this->durationSeconds = $durationSeconds;
        if ($durationSeconds > self::$maxClipDurationSeconds) {
            self::$maxClipDurationSeconds = $durationSeconds;
        }
    }

    public function __toString(): string
    {
        $numMegaBytesFormatted = number_format($this->getSizeMegaBytes(), 2); return "(AudioClip) $this->title "
            . "($this->durationSeconds seconds), $numMegaBytesFormatted MB \n";
    }
}