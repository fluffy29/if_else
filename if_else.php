<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>
<?php
$members = array("Peter" =>"35", "Ben" => "37","Joe" => "50");
foreach ($members as $x => $y) {
    echo "$x has $y year old;";
}  
?> 
</body>

</html>