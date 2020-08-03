<?php
//함수 방식으로 데이터베이스 로긴하기
$conn = mysqli_connect("localhost", "root", "0710kjb2198", "data1");

$sql = "
 INSERT INTO topic
   (title, description, created)
   VALUE('MySQL', 'MySQL is ~~', NOW()
   )
";

$result = mysqli_query($conn,$sql);
if($result ===false){
  echo mysqli_error($conn);
} echo $result;


?>
