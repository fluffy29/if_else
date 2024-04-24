<?php

session_start();
?>

<htmml> <body>
    <?php
$_SESSION['name '] = 'Alexender';
$_SESSION['age '] = 25;
echo 'name' . $_SESSION['name '] . "<br>";
echo 'age' . $_SESSION['age '] . "<br>";
?>
</body></htmml>