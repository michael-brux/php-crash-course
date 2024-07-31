<?php

namespace Mattsmithdev;

class AppointmentRepository
{
    public const MYSQL_DATE_FORMAT_STRING = 'Y-m-d H:i:s.u';

    public const MYSQL_DATABASE = 'date1';
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
                self::MYSQL_PASS);
        } catch (\Exception) {
            print 'sorry - there was a problem connecting to database ' . self::MYSQL_DATABASE;
        }
    }


    public function insert(Appointment $appointment): int
    {
        if(NULL == $this->connection) return -1;

        $title = $appointment->getTitle();
        $startDateTime = $appointment->getStartDateTime();
        $dateString = $startDateTime->format(self::MYSQL_DATE_FORMAT_STRING);;

        // Prepare SQL
        $sql = 'INSERT INTO appointment (title, startdatetime) VALUES (:title, :startdatetime)';
        $stmt = $this->connection->prepare($sql);

        // Bind parameters to statement variables
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':startdatetime', $dateString);

        // Execute statement
        $success = $stmt->execute();

        if($success){
            return $this->connection->lastInsertId();
        } else {
            return -1;
        }
    }

    public function findAll(): array
    {
        $sql = 'SELECT * FROM appointment';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $objects = $stmt->fetchAll();

        $appointments = [];
        foreach ($objects as $object) {
            $appointment = new \Mattsmithdev\Appointment();
            $appointment->setId($object['id']);
            $appointment->setTitle($object['title']);
            $appointment->setStartDateTime($object['startdatetime']);
            $appointments[] = $appointment;
        }

        return $appointments;
    }
}