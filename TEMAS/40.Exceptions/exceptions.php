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

echo divide(5, 0);
echo 'Hello';
?>

</body>
</html>
