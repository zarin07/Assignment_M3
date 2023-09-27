<?php
$studentGrades=[
    'student_1' => ['Math' => 100,'English' =>80, 'Science' => 88],
    'student_2' => ['Math' => 80,'English' =>50, 'Science' => 70],
    'student_3' => ['Math' => 90,'English' =>88, 'Science' => 96],
];

function grade($studentGrades)
{
    foreach($studentGrades as $students =>$grades){
        $subjects = count($grades);
        $totalGrade = array_sum($grades);
        $avg_grade = $totalGrade / $subjects;
        
        $floor_avg = floor($avg_grade);

        if($floor_avg >=90){  
            echo "{$students} grade is: A\n";
        }

        if($floor_avg >=80 && $floor_avg <=89){        
            echo "{$students} grade is: B\n";
        }

        if($floor_avg <=70 ){
            echo "{$students} grade is: C\n";
        }
    }
        
}

grade($studentGrades);