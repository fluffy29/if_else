<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>
<?php

$inventory = array(
    "printer" => array(
      "stock" => 10,
      "sold" => 15,
    ),
    "screens" => array(
      "stock" => 20,
      "sold" => 5,
    ),
    "keyboard" => array(
      "stock" => 25,
      "sold" => 10,
    ),
  );

foreach ($inventory as $item => $details) {
    $stock = $details['stock'];
    $sold = $details['sold'];
    echo "$item: Stock: $stock, Sold: $sold <br>";
}
  
?>