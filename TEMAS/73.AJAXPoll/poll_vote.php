<?php
$vote = $_REQUEST['vote'];

$filename = "poll_result.txt";
$content = file($filename);
$array = explode("||", $content[0]);

$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $yes = $yes + 1;
}

if ($vote == 1) {
  $no = $no + 1;
}

$insertvote = $yes . "||" . $no;
$fp = fopen($filename, "w");
fwrite($fp, $insertvote);
fclose($fp);
?>

<h2>Result:</h2>
Yes:
<?php echo $yes; ?>
<br>
No:
<?php echo $no; ?>