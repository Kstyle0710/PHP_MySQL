<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo '<script>alert("hi")</script>';
echo htmlspecialchars('<script>alert("good")</script>');
?>


</body>
</html>
