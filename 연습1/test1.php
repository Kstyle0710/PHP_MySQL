<!doctype html>
<html>
<body>

  <h1>Data Type</h1>
  <?php
  echo 100/50;
  echo "hello world"
   ?>
<br>
  <?php
  echo 100/50;
  echo "hello world"
  ?>
<br>
  <?php
  echo "hello"."world"
  ?>
<br>
  <?php
  echo strlen("hello"."world")  // 문자개수
  ?>
<br>
  <?php
  echo strlen("hello world")
  ?>
<br>
  <?php
  echo ("출력테스트")
  ?>
<br>
  <?php
  $list1 = scandir('data');
  echo implode($list1);
  echo ($list1[0]);
  // echo ($list1[1]);
  // echo ($list1[2]);
  //
  // echo count($list1);
  ?>
  <br>

  <?php
  $friends = array("kim", "yoon", "lee");
  echo implode($friends);
  echo "<br>".$friends[0]."<br>";
  echo $friends[2]."<br>";
  echo count($friends);
  array_push($friends, "Choi");
  echo implode($friends);

   ?>

</body>
</html>
