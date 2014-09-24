<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Harjutus 9</title>
<style type="text/css">
    .container {
      max-width: 200px;
      margin: 0 auto;
      padding: 10px;
      border: 1px solid red;
    }

    .container > p {
        font-size: 20px;
        color: red;
    }
</style>
</head>
<body>
<h2>Funktsiooni defineerimine</h2>
<h3>Argumendita funktsioon</h3>
<?php 
    function say_hello() {
        echo "Minu esimene funktsioon!";
    }
    say_hello();
?>
<h3>Argumendiga funktsioon</h3>
<?php 
    $person = "Ingrid";
    function say_hello_to($person) {
        echo "<div class='container'>" . "<p>Hello, {$person}!</p><br>" . "</div>";
    }
    say_hello_to($person);
?>
<?php 
    say_hello();
    say_hello_to($person = Anneli);
?>
<h3>Väärtuse tagastamine</h3>
<?php
function add($number1, $number2) {
  $sum = $number1 + $number2;
 return $sum;
}
$result = add(3,4);
echo $result;
?>
</body>
</html>