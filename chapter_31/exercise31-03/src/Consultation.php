<?php

namespace Mattsmithdev;

class Consultation
{
    private int $id;
    private string $patient;
    private string $doctor;
    private \DateTimeImmutable $dateTime;
    private int $duration;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }



    public function getDateTime(): \DateTimeImmutable
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTimeImmutable|string $dateTime): void
    {


        if (is_string($dateTime)) {
            $dateTimeFromFormat =  \DateTimeImmutable::createFromFormat(ConsultationRepository::MYSQL_DATE_FORMAT_STRING, $dateTime);
            $dateTime = $dateTimeFromFormat;
        }

        $this->dateTime = $dateTime;
    }

    public function getPatient(): string
    {
        return $this->patient;
    }

    public function setPatient(string $patient): void
    {
        $this->patient = $patient;
    }

    public function getDoctor(): string
    {
        return $this->doctor;
    }

    public function setDoctor(string $doctor): void
    {
        $this->doctor = $doctor;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }



}