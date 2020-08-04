<?php
// var_dump($_POST); // 잘 넘어왔는지 확인 출력
$conn = mysqli_connect("localhost", "root", "0710kjb2198", "data1");
// print_r($_POST);

$filtered= array(
  'name'=>mysqli_real_escape_string($conn, $_POST['name']),
  'profile'=>mysqli_real_escape_string($conn, $_POST['profile'])
);

$sql = "

INSERT INTO author
(name, profile)
VALUES(
  '{$filtered['name']}',
  '{$filtered['profile']}'
  )";

// die($sql);
$result = mysqli_query($conn, $sql);
if($result===false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  header("Location: author.php");  //리다이렉션
}
?>
