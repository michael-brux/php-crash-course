<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Appointment;
use Mattsmithdev\AppointmentRepository;

$appointmentRepository = new AppointmentRepository();

$appointment = new Appointment();
$appointment->setTitle('get an ice cream sandwich');
$appointment->setStartDateTime(new DateTimeImmutable('2009-08-02T11:00:00.5'));
$appointmentRepository->insert($appointment);

$appointment2 = new Appointment();
$appointment2->setTitle('celebrate birthday');
$appointment2->setStartDateTime(new DateTimeImmutable('2025-11-22T09:05:30.77'));
$appointmentRepository->insert($appointment2);

$appointments = $appointmentRepository->findAll();
foreach ($appointments as $appointment) {
    var_dump($appointment);
}
