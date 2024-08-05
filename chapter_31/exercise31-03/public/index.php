<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Mattsmithdev\Consultation;
use Mattsmithdev\ConsultationRepository;

$consultationRepository = new ConsultationRepository();

// -- create new record --
//$consultation = new Consultation();
//$consultation->setPatient('John Doe');
//$consultation->setDoctor('Dr. GoodSurgeon');
//$consultation->setDuration(120);
//$date1 = new DateTimeImmutable('2025-08-02T11:00:00.5');
//$consultation->setDateTime($date1);
//$consultationRepository->insert($consultation);

print "\n\n------------ findAll from DB ------------\n";
$consultations = $consultationRepository->findAll();
foreach ($consultations as $consultation) {
    var_dump($consultation);
}
