<?php
$conn = mysqli_connect("localhost", "root", "0710kjb2198", "data1");

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
  $escaped_title = htmlspecialchars($row['title']);
  $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$escaped_title}</a></li>";
}

$article =  array(
'title'=>'Welcome!',
'description'=>'Hello, Web~'
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>
</head>
<body>
  <h1><a href='index.php'>WEB</a></h1>
  <ol>
    <?php echo $list; ?>
  </ol>
  <form class="" action="process_create.php" method="POST">
    <p><input type="text" name="title" placeholder="제목을 입력하세요"></p>
    <p><textarea name="description" placeholder="내용을 입력하세요"></textarea></p>
    <p><input type="submit" value="등록"></p>

  </form>


</body>
</html>
