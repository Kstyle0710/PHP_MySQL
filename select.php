<?php
$conn = mysqli_connect("localhost", "root", "0710kjb2198", "data1");
// if 1 row
// $sql = "SELECT * FROM topic where id = 8";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result);
// echo '<h1>'.$row['title'].'</h1>';
// echo $row['description'];

//if all get_browser
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result)){
  echo '<h2>'.$row['title'].'</h2>';
  echo $row['description'];
};




?>
