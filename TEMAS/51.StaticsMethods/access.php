<!DOCTYPE html>
<html>
<body>

<?php
class calc {
  public static function sum($x, $y) {
    return $x * $y;
  }
}

// Call static method
$res = calc::sum(6, 4);
echo $res; 
?>
 
</body>
</html>
