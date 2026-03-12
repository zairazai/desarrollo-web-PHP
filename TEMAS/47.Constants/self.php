!DOCTYPE html>
<html>
<body>

<?php
class Goodbye {
  const MESSAGE = "Thank you for visiting W3Schools.com!";

  public function bye() {
    echo self::MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->bye();
?>

</body>
</html>
