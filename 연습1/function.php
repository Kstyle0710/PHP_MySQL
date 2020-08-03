<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet consectetur 
    
    adipisicing elit. Et beatae odit porro aliquid, laudantium vel provident ipsum assumenda, magnam incidunt quisquam hic repellat eos culpa. Ut voluptatem cumque tempora atque?";
    echo $str;
    ?>

    <h2>strlen</h2>
    <?php
    echo strlen($str);
    ?>

    <h2>na2br</h2> <!-- 줄바꿈 함수 -->
    <?php
    echo nl2br($str)
    ?>



</body>
</html>