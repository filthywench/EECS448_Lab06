<!DOCTYPE html>
<html>
    <head>
      <title>QUIZ SOLUTIONS</title>
      <link href="style.css" rel="stylesheet" type="text/css">
    </head>
<body>
  <h1>ANSWERS: Jesse Eisenberg Trivia</h1>

<?php

$counter = 0;

  $q1_input_a = $_POST["one"] == "a";
  $q1_input_b = $_POST["one"] == "b";
  $q1_input_c = $_POST["one"] == "c";
  $q1_input_d = $_POST["one"] == "d";

  $q2_input_a = $_POST["two"] == "a";
  $q2_input_b = $_POST["two"] == "b";
  $q2_input_c = $_POST["two"] == "c";
  $q2_input_d = $_POST["two"] == "d";

  $q3_input_a = $_POST["three"] == "a";
  $q3_input_b = $_POST["three"] == "b";
  $q3_input_c = $_POST["three"] == "c";
  $q3_input_d = $_POST["three"] == "d";

  $q4_input_a = $_POST["four"] == "a";
  $q4_input_b = $_POST["four"] == "b";
  $q4_input_c = $_POST["four"] == "c";
  $q4_input_d = $_POST["four"] == "d";

  $q5_input_a = $_POST["five"] == "a";
  $q5_input_b = $_POST["five"] == "b";
  $q5_input_c = $_POST["five"] == "c";
  $q5_input_d = $_POST["five"] == "d";

?>

<h3>Question 1: When is Jesse's birthday?</h3>

<?php

  if($q1_input_a == "1") {
    echo "<p>&ensp; <b>You answered:</b> October 5th, 1983 </p>";
    $counter++;
  }
  elseif($q1_input_b == "1") {
    echo "<p>&ensp; <b>You answered:</b> October 10th, 1983 </p>";
  }
  elseif($q1_input_c == "1") {
    echo "<p>&ensp; <b>You answered:</b> November 15th, 1983 </p>";
  }
  elseif($q1_input_d == "1") {
    echo "<p>&ensp; <b>You answered:</b> November 25th, 1983 </p>";
  }
  else {
    echo "<p>&ensp; <b>You answered:</b> </p>";
  }

  echo "<p>&ensp; <b>Correct answer:</b> October 5th, 1983 </p>"
?>

<br>
<h3>Question 2: What is Jesse's middle name?</h3>

<?php 

if($q2_input_a == "1") {
  echo "<p>&ensp; <b>You answered:</b> James </p>";
}
elseif($q2_input_b == "1") {
  echo "<p>&ensp; <b>You answered:</b> Patrick </p>";
}
elseif($q2_input_c == "1") {
  echo "<p>&ensp; <b>You answered:</b> Stephen </p>";
}
elseif($q2_input_d == "1") {
  echo "<p>&ensp; <b>You answered:</b> Adam </p>";
  $counter++;
}
else {
  echo "<p>&ensp; <b>You answered:</b> </p>";
}

echo "<p>&ensp; <b>Correct answer:</b> Adam </p>"

?>

<br>
<h3>Question 3: Which of the following movies is Jesse <em>not</em> in?</h3>
<?php 

if($q3_input_a == "1") {
  echo "<p>&ensp; <b>You answered:</b> The Village </p>";
}
elseif($q3_input_b == "1") {
  echo "<p>&ensp; <b>You answered:</b> Year One </p>";
  $counter++;
}
elseif($q3_input_c == "1") {
  echo "<p>&ensp; <b>You answered:</b> Holly Rollers </p>";
}
elseif($q3_input_d == "1") {
  echo "<p>&ensp; <b>You answered:</b> Free Samples </p>";
}
else {
  echo "<p>&ensp; <b>You answered:</b> </p>";
}

echo "<p>&ensp; <b>Correct answer:</b> Year One </p>"

?>

<br>
<h3>Question 4: Which TV show has Jesse guest-starred in?</h3>
<?php 

if($q4_input_a == "1") {
  echo "<p>&ensp; <b>You answered:</b> Brooklyn Nine-Nine </p>";
}
elseif($q4_input_b == "1") {
  echo "<p>&ensp; <b>You answered:</b> How I Met Your Mother </p>";
}
elseif($q4_input_c == "1") {
  echo "<p>&ensp; <b>You answered:</b> New Girl </p>";
}
elseif($q4_input_d == "1") {
  echo "<p>&ensp; <b>You answered:</b> Modern Family </p>";
  $counter++;
}
else {
  echo "<p>&ensp; <b>You answered:</b> </p>";
}

echo "<p>&ensp; <b>Correct answer:</b> Modern Family </p>"

?>

<br>
<h3>Question 5: How many children does Jesse have?</h3>
<?php 

if($q5_input_a == "1") {
  echo "<p>&ensp; <b>You answered:</b> 0 </p>";
}
elseif($q5_input_b == "1") {
  echo "<p>&ensp; <b>You answered:</b> 1 </p>";
  $counter++;
}
elseif($q5_input_c == "1") {
  echo "<p>&ensp; <b>You answered:</b> 2 </p>";
}
elseif($q5_input_d == "1") {
  echo "<p>&ensp; <b>You answered:</b> 3 </p>";
}
else {
  echo "<p>&ensp; <b>You answered:</b> </p>";
}

echo "<p>&ensp; <b>Correct answer:</b> 1 </p>"

?>

<br>
<h2 style="color: white">RESULTS</h2>
<?php
  if($counter == 1) {
    echo "<p>&ensp; You answered <b>$counter</b> question correctly.</p>";
  }
  else {
    echo "<p>&ensp; You answered <b>$counter</b> questions correctly.</p>";
  }

  $percent = (($counter * 2)*10);
  echo "<p>&ensp; Your score is <b>$percent%</b>.</p>";
?>

<button onclick="location.href='exercise_2.html'">Try Again </button>
