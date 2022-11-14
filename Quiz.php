<?php 
//total score count for the quiz
$score = 0;

//correct answers
$real_answer1 = "Washington DC";
$real_answer2 = "Madrid";
$real_answer3 = "Dublin";
$real_answer4 = "Edinburgh";
$real_answer5 = "Rabat";

//grab user answers
$answer1 = $_POST["us_capital"];
$answer2 = $_POST["spain_capital"];
$answer3 = $_POST["ireland_capital"];
$answer4 = $_POST["scotland_capital"];
$answer5 = $_POST["morocco_capital"];
 
//display questions, user answers, and correct answers
echo "What is the capital of the United States?<br>";
echo "You answered: " . $answer1 . "<br>";
echo "Correct answer: " . $real_answer1 . "<br>";

echo "<br> What is the capital of Spain?<br>";
echo "You answered: " . $answer2 . "<br>";
echo "Correct answer: " . $real_answer2 . "<br>";

echo "<br> What is the capital of Ireland?<br>";
echo "You answered: " . $answer3 . "<br>";
echo "Correct answer: " . $real_answer3 . "<br>";

echo "<br> What is the capital of Scotland?<br>";
echo "You answered: " . $answer4 . "<br>";
echo "Correct answer: " . $real_answer4 . "<br>";

echo "<br> What is the capital of Morocco?<br>";
echo "You answered: " . $answer5 . "<br>";
echo "Correct answer: " . $real_answer5 . "<br>";

//score calculation
if($answer1 == $real_answer1)
{
    $score++;
}

if($answer2 == $real_answer2)
{
    $score++;
}

if($answer3 == $real_answer3)
{
    $score++;
}

if($answer4 == $real_answer4)
{
    $score++;
}

if($answer5 == $real_answer5)
{
    $score++;
}

//percentage calculation
$percentage = $score/5 * 100;

//display score and percentage
echo "<br> You answered " . $score . " question/s correctly <br>";
echo "Your total percentage was " . $percentage . "%!";
?> 