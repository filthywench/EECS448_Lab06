<!DOCTYPE html>
<html>
    <head>
      <title>Multiplication Table</title>
      <link href="style.css" rel="stylesheet" type="text/css">
    </head>
<body>
  <h1>Multiplication Table</h1>
  <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    // include 'CSS/style.css';

    $counter = 0;
    echo "<table>";
    for ($i=1; $i<=100; $i++) {
      echo "<tr> \n";
      for ($j=1; $j<=100; $j++) {
        $counter = $i * $j;
        echo "<td>$counter</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  ?>
</body>
</html>
