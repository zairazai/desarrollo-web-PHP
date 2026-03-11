<!DOCTYPE html>
<html>
<body>

<?php
$numbers = [1, 2, 3, 4, 5];

$res = array_map(function($n) {return($n * $n);}, $numbers);

print_r($res);
?>

</body>
</html>
