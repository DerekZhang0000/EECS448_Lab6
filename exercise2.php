<?php
$correct = 0;
$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

if ($q1 == 2)
{
	$correct++;
}
if ($q2 == 1)
{
	$correct++;
}
if ($q3 == 1)
{
	$correct++;
}
if ($q4 == 3)
{
	$correct++;
}
if ($q5 == 3)
{
	$correct++;
}
echo "Total Score: " . 100 * $correct / 5 . "%<br><br>";
echo "Question 1: What is 1 + 1?<br>";
echo "You answered: " . $q1 . " Correct answer: 2<br><br>";
echo "Question 2: What is 0 + 1?<br>";
echo "You answered: " . $q2 . " Correct answer: 1<br><br>";
echo "Question 3: What is 1 + 0?<br>";
echo "You answered: " . $q3 . " Correct answer: 1<br><br>";
echo "Question 4: What is 1 + 2?<br>";
echo "You answered: " . $q4 . " Correct answer: 3<br><br>";
echo "Question 5: What is 2 + 1?<br>";
echo "You answered: " . $q5 . " Correct answer: 3";
?>
