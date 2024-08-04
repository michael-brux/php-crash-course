<?php

namespace Mattsmithdev;

class Staff
{
    private string $name;
    private string $jobTitle;

    public function __construct(string $name, string $jobTitle)
    {
        $this->name = $name;
        $this->jobTitle = $jobTitle;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }

    public function setJobTitle(string $jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }



}