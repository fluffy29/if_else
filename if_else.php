<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>
    <?php
    $x = 0;
    while ($x <= 100) {
        if ($x == 50) {
            $x += 10;
            continue;
        }
        if ($x == 85) {
            break;
        }
        echo "the number is: $x <br>";
        $x += 10;
    }
    ?>
</body>

</html>