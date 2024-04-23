<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>
<?php
declare(strict_types=1);
function addNumbers(float $a, float $b):int {
    return (int) ($a + $b);
}
echo addNumbers(5, 3.14);
?> 
</body>

</html>