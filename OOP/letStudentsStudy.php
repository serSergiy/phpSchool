<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 17.02.2019
 * Time: 23:59
 */
require_once 'Student.php';

$students = [
    ['name' => 'Mike', 'surname' => 'Barnes', 'gender' => 'male', 'status' => 'freshman', 'gpa' => 4],
    ['name' => 'Jim', 'surname' => 'Nickerson', 'gender' => 'male', 'status' => 'sophomore', 'gpa' => 3],
    ['name' => 'Jack', 'surname' => 'Indabox', 'gender' => 'male', 'status' => 'junior', 'gpa' => 2.5],
    ['name' => 'Jane', 'surname' => 'Miller', 'gender' => 'female', 'status' => 'senior', 'gpa' => 3.6],
    ['name' => 'Mary', 'surname' => 'Scott', 'gender' => 'female', 'status' => 'senior', 'gpa' => 2.7],
];

$studyTimes = [60, 100, 40, 300, 1000];

$studentsList = [];

foreach ($students as $value) {
    array_push($studentsList,
        new Student($value['name'], $value['surname'], $value['gender'], $value['status'], $value['gpa']));
}

echo 'Students before: ', PHP_EOL;

foreach ($studentsList as $student) {
    echo PHP_EOL;
    $student->showMyself();
}

foreach ($studentsList as $number => $student) {
    echo PHP_EOL;
    //$student->studyTime($studyTimes[$number]); //minutes
    $student->studyTime($studyTimes[$number] / 60); //hours
}

echo 'Students after: ', PHP_EOL;

foreach ($studentsList as $student) {
    echo PHP_EOL;
    $student->showMyself();
}