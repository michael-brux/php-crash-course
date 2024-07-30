<?php

namespace Mattsmithdev;
class AudioClip
{
    // --- Static (per-class) members ---
    private static int $maxClipDurationSeconds = -1;

    public static function getMaxClipDurationSeconds(): int
    {
        return self::$maxClipDurationSeconds;
    }

    // --- Object (instance) members ---
    private string $title;
    private int $durationSeconds = 0;

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
    return "(AudioClip) $this->title ($this->durationSeconds seconds) \n";
    }
}