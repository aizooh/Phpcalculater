<?php
if (isset($_POST["operation"])) {
  $x = $_POST['no1'];
  $y = $_POST['no2'];
  $z = $_POST['operation'];

  switch ($z) {
    case 'add':
      $result = $x + $y;
      break;
    case 'sub':
      $result = $x - $y;
      break;
    case 'div':
      if ($y == 0) {
        $result = "Error: Division by zero";
      } else {
        $result = $x / $y;
      }
      break;
    case 'pro':  // Assuming you meant multiplication, change it to 'mul'
      $result = $x * $y;
      break;
    case 'mod':
      $result = $x % $y;
      break;
    case 'root':  // Square root of sum is incorrect, calculate individual roots
      $result = "sqrt(" . $x . ") + sqrt(" . $y . ")";  // Show individual roots
      break;
    default:
      $result = "Error: Invalid operation";
  }
} else {
  $result = ""; // Initialize result to an empty string when no operation is submitted
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form method="post">
    <div class="form-group">
      <label for="no1">Enter number:</label>
      <input type="number" id="no1" name="no1" class="input"> <br>
      <label for="no2">Enter number:</label>
      <input type="number" id="no2" class="input" name="no2"> <br>
      <label for="result">Result:</label>
      <input type="text" id="result" name="result" value="<?= $result ?>" disabled class="input"> </div>

    <div class="button-group">
      <input type="submit" value="add" name="operation">
      <input type="submit" value="sub" name="operation">
      <input type="submit" value="div" name="operation">
      <input type="submit" value="pro" name="operation"> 
      <input type="submit" value="mod" name="operation">
      <input type="submit" value="root" name="operation">
    </div>
  </form>

</body>
</html>
