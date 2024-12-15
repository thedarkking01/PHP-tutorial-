<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables in HTML</title>
</head>
<body>
    <?php
        $name = "John Doe";
        $age = 25;
    ?>
    <h1>About Me</h1>
    <p>Name: <?php echo $name; ?></p>
    <p>Age: <?php echo $age; ?></p>
</body>
</html>
