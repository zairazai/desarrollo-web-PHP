<!DOCTYPE html>
<html>
<body>

<?php
date_default_timezone_set("UTC");
$d = mktime(0, 0, 0, 10, 3, 1975);
echo "October 3, 1975 was on a " . date("l", $d);
?>

</body>
</html>