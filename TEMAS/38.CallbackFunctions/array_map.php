<!DOCTYPE html>
<html>
<body>

<?php
// Define the named callback function
function myfunction($n)
{
  return($n * $n);
}

// Array of numbers to multiply
$numbers = [1, 2, 3, 4, 5];

// Use array_map with the myfunction function as a callback
print_r(array_map("myfunction", $numbers));
?>

</body>
</html>
