<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Title</title>
</head>

<body>
  <?php
  $i = 2;
  do {
    $i++;
    if ($i == 3) {
      continue; # Skip to the next iteration
    }
    if ($i == 5) {
      break; # Exit the loop
    }
    echo $i; # Only print numbers between 4 and (excluding) 5
  } while ($i < 10);
  ?>
</body>

</html>
