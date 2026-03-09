<!DOCTYPE html>
<html>
<body>

<?php
$x = 10;
$y = 20;

function result() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

result();
echo $z;
?>

</body>
</html>
