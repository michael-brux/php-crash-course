<?php

namespace Mattsmithdev;

class ConsultationRepository
{
    public const MYSQL_DATABASE = 'ex3103';


//    public const MYSQL_DATE_FORMAT_STRING = 'Y-m-d H:i:s.u';
    public const MYSQL_DATE_FORMAT_STRING = 'Y-m-d H:i:s';

    public const MYSQL_HOST = 'localhost:3306';
    public const MYSQL_USER = 'root';
    public const MYSQL_PASS = 'passpass';

    private ?\PDO $connection = NULL;

    public function __construct()
    {
        try {
            $this->connection = new \PDO('mysql:dbname='
                . self::MYSQL_DATABASE . ';host='
                . self::MYSQL_HOST ,
                self::MYSQL_USER,
                self::MYSQL_PASS
            );
        } catch (\Exception) {
            print 'sorry - there was a problem connecting to database ' . self::MYSQL_DATABASE;
        }
    }

    public function insert(Consultation $consultation): int
    {
        if (NULL == $this->connection) return -1;

        $patient = $consultation->getPatient();
        $doctor = $consultation->getDoctor();
        $duration = $consultation->getDuration();
        $dateTime = $consultation->getDateTime();
        $dateString = $dateTime->format(self::MYSQL_DATE_FORMAT_STRING);

        // Prepare SQL
        $sql = 'INSERT INTO consultation (patient, doctor, duration, consultationdatetime) VALUES (:patient, :doctor, :duration, :datetime)';
        $stmt = $this->connection->prepare($sql);

        // Bind parameters to statement variables
        $stmt->bindParam(':patient', $patient);
        $stmt->bindParam(':doctor', $doctor);
        $stmt->bindParam(':duration', $duration);
        $stmt->bindParam(':datetime', $dateString);

        // Execute statement
        $success = $stmt->execute();

        if ($success) {
            return $this->connection->lastInsertId();
        } else {
            return -1;
        }
    }

    public function findAll(): array
    {
        $sql = 'SELECT * FROM consultation';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $objects = $stmt->fetchAll();

        $consultations = [];
        foreach ($objects as $object) {
            $consultation = new Consultation();
            $consultation->setId($object['id']);
            $consultation->setPatient($object['patient']);
            $consultation->setDoctor($object['doctor']);
            $consultation->setDuration($object['duration']);

            $consultation->setDateTime($object['consultationdatetime']);

            $consultations[] = $consultation;
        }

        return $consultations;
    }

}