<?php 

include 'includes/class-autoLoader.inc.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
$testObj = new Test();
   $testObj->getUsers();
    
    ?>
</body>
</html>