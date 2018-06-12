
<?php
	
	$totalCorrect = 0;
	if (isset($_POST['question-1-answers'])){
      $answer1 = $_POST['question-1-answers'];
	  if ($answer1 == "B") { $totalCorrect++; }}
	  
	
	if (isset($_POST['question-2-answers'])){
	$answer2 = $_POST['question-2-answers'];
	if ($answer2 == "A") { $totalCorrect++; }}
	
	if (isset($_POST['question-3-answers'])){
    $answer3 = $_POST['question-3-answers'];
	if ($answer3 == "C") { $totalCorrect++; }}
	
	
	if (isset($_POST['question-4-answers'])){
    $answer4 = $_POST['question-4-answers'];
	if ($answer4 == "B") { $totalCorrect++; }}
	
	
	if (isset($_POST['question-5-answers'])){
    $answer5 = $_POST['question-5-answers'];
	if ($answer5 == "C") { $totalCorrect++; }}

    echo ("$totalCorrect / 5 correct");
    
?>