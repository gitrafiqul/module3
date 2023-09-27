<?php

$grades = array(85, 92, 78, 88, 95);

function sortGradesDescending($inputArray) {
    rsort($inputArray);
    print_r($inputArray);
}

sortGradesDescending($grades);

?>