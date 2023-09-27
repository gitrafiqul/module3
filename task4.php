<?php
$studentGrades = array(
    array("Math" => 90, "English" => 88, "Science" => 94),
    array("Math" => 85, "English" => 92, "Science" => 78),
    array("Math" => 89, "English" => 91, "Science" => 87)
);

function calculateAverageGrades($inputArray) {
    foreach ($inputArray as $student) {
        $average = array_sum($student) / count($student);
        echo "Average grade: $average\n";
    }
}

calculateAverageGrades($studentGrades);

?>