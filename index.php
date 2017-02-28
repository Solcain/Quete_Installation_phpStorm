<?php
$students = [
    "Emmanuel" => 42,
    "Thierry" => 51,
    "Pascal" => 45,
    "Eric" => 48,
    "Nicolas" => 19
];

foreach ($students as $prenom => $age) {
    echo $prenom." ".$age.'<br />';
}
echo '<br />';
$moyenne = array_sum($students)/count($students);
echo 'La moyenne d âge est de'." ".$moyenne;

?>