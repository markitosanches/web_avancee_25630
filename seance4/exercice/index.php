<?php
require_once('classes/Student.php');

$student = new Student;

$student->setName('Lisa');
$student->setPhone('514-888-7777');

echo "<pre>";
var_dump($student);
echo "</pre>";

require_once('classes/Teacher.php');

$teacher = new Teacher;

$teacher->setName('Charlie');
$teacher->setPhone('514-999-7777');
$teacher->calcSalary(40);

echo "<pre>";
var_dump($teacher);
echo "</pre>";

echo $teacher->getTeacher();