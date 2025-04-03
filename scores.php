<?php
function searchStudentByScore($students, $score) {
    foreach ($students as $student) {
        if (in_array($score, $student['scores'])) {
            return $student;
        }
    }
    return null;
}

$students = [
    ['name' => 'Alice', 'reg_no' => 101, 'scores' => [85, 90, 78]],
    ['name' => 'Bob', 'reg_no' => 102, 'scores' => [88, 76, 95]],
    ['name' => 'Charlie', 'reg_no' => 103, 'scores' => [90, 80, 85]]
];

$searchScore = 90;
$result = searchStudentByScore($students, $searchScore);

if ($result) {
    echo "Student found: " . print_r($result, true);
} else {
    echo "No student found with the score $searchScore.";
}
?>