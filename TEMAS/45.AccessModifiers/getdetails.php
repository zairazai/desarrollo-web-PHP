<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;

  public function get_details() {
    echo "Name: " . $this->name . ".";
  }
}

$apple = new Fruit();
$apple->name = "Apple";
$apple->get_details();
?>
 
</body>
</html>
