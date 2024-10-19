<?php
//marks of 5 subject
$subject1 =50;
$subject2 =45;
$subject3 =60;
$subject4 =40;
$subject5 =37;


//calculate total marks
$totalMarks = $subject1+$subject2 + $subject3+$subject4+$subject5;

//calculate average marks
$averageMarks = $totalMarks/5;

//Determine the grade using switch case
switch (true){
    case ($averageMarks >=80):
    $grade ="A+";
    break;
    case ($averageMarks>=70):
    $grade ="A";
    break;
    case($averageMarks>=60 ):
    $grade ="-A";
    break;
    case($averageMarks>=50):
    $grade ="B";
    break;
    case($averageMarks>=40):
    $grade ="C";
    break;
    case($averageMarks>=33):
    $grade ="D";
    break;
    default:
    $grade="F";


}
//Display the result
echo "Total Marks:".$totalMarks."<br>";
echo "Average Marks:".$averageMarks."<br>";
echo "Grade:".$grade."<br>";



?>