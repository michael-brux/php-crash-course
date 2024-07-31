<?php

namespace Mattsmithdev;

class Appointment
{
    private int $id;
    private string $title;
    private \DateTimeImmutable $startDateTime;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getStartDateTime(): \DateTimeImmutable
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(\DateTimeImmutable|string $startDateTime): void
    {
        if (is_string($startDateTime)) {
            $startDateTime = \DateTimeImmutable::createFromFormat(
                AppointmentRepository::MYSQL_DATE_FORMAT_STRING, $startDateTime);
        }

        $this->startDateTime = $startDateTime;
    }

}