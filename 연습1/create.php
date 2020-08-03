<?php
require_once('lib/print.php');
?>

<?php
require('view/top.php');
?>
    <form action="create_process.php" method="POST">
      <p><input type="text" name="title"placeholder="제목을 입력하세요"></p>
      <p><textarea name="description"placeholder="내용을 입력하세요"></textarea></p>
      <p><input type="submit"></p>
    </form>

<!-- id값 유무에 따른 조건문 설정 -->

<?php
require_once('view/bottom.php');
?>
