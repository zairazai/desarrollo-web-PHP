<!DOCTYPE html>
<html>
<body>

<?php
function divide($x, $y) {
  if($y == 0) {
    throw new Exception("Cannot divide by zero.");
  }
  return $x / $y;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo 'Error: ' . $e->getMessage();
}

echo '<br>Hello';
?>

</body>
</html>
