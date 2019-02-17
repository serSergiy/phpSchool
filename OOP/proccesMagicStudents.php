<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 17.02.2019
 * Time: 23:58
 */
require_once 'MagicStudent.php';

$student1 = new MagicStudent ('Serhio', 'Zachik', 'male', 'junior', 0);
$student2 = new MagicStudent ('Ivar', 'Bonefull', 'male', 'senior', 4);

$student1->hobby = 'Chess'; // __set()
$student2->favoriteSub = 'Biology';

echo $student1->getFirstname(), '\'s hobby: ', $student1->hobby, PHP_EOL; //__get()
echo $student2->getFirstname(), '\'s favorit subject: ', $student2->favoriteSub, PHP_EOL;
echo $student2->getFirstname(), '\'s favorit subject: ', $student2->hobby, PHP_EOL;

echo PHP_EOL, "echo <student> example :", PHP_EOL, $student1, PHP_EOL; //__toString()

$student2 = null; //__destruct()

echo 'Destructed before the end of script', PHP_EOL;
echo 'and then after: ', PHP_EOL;