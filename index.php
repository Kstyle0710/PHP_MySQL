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
$update_link = '';
$delete_link = "";
if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);  // sql 주입공격(인젝션)을 막기 위한 코드
  $sql = "SELECT * FROM topic WHERE id = {$filtered_id}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['title'] = htmlspecialchars($row['title']);
  $article['description'] = htmlspecialchars($row['description']);

  $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
  $delete_link = '
  <form action="process_delete.php" method="post">
  <input type="hidden" name="id" value="'.$_GET['id'].'">
  <input type="submit" value="delete">
  </form>
  ';
}
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
  <a href="create.php">create</a>
  <?=$update_link?>
  <?=$delete_link?>
  <?php
  echo "<h2>".$article['title']."</h2>";
  echo $article['description'];
   ?>
  <!-- <h2>Welcome</h2>
  Lorem ipsum dolor sit amet, -->

</body>
</html>
