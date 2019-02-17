<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 17.02.2019
 * Time: 23:02
 */

class Student
{
    private static $genders = ['male', 'female'];
    private static $statuses = ['freshman', 'sophomore', 'junior', 'senior', 'gpa'];

    private $firstname;
    private $lastname;
    private $gender;
    private $status;
    private $gpa;

    /**
     * Student constructor.
     * @param $firstname
     * @param $lastname
     * @param $gender
     * @param $status
     * @param $gpa
     * @throws Exception
     */
    public function __construct($firstname, $lastname, $gender, $status, $gpa = 0)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->setGender($gender);
        $this->setStatus($status);
        $this->setGpa($gpa);
    }

    public function showMyself()
    {
        echo $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->firstname . PHP_EOL .
            $this->lastname . PHP_EOL .
            $this->gender . PHP_EOL .
            $this->status . PHP_EOL .
            $this->gpa . PHP_EOL;
    }

    /**
     * @param $study_time
     */
    public function studyTime($study_time)
    {
        $gpa = $this->gpa + log10($study_time);
        $gpa > 4.0
            ? $this ->gpa = 4.0
            : $this->gpa = $gpa;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @param mixed $gender
     * @throws Exception
     */
    public function setGender($gender)
    {
        if (in_array($gender, self::$genders)) {
            $this->gender = $gender;
        } else {
            throw new Exception('Invalid gender');
        }
    }

    /**
     * @param mixed $status
     * @throws Exception
     */
    public function setStatus($status)
    {
        if (in_array($status, self::$statuses)) {
            $this->status = $status;
        } else {
            throw new Exception('Invalid status');
        }
    }

    /**
     * @param int $gpa
     */
    public function setGpa($gpa)
    {
        $gpa >= 4.0
            ? $this->gpa = 4.0
            : $this->gpa = $gpa;
    }
}