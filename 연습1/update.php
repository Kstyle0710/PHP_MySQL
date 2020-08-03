<?php
require_once('lib/print.php');
?>
<?php
require_once('view/top.php');
?>
    <!-- 업데이트는 홈 화면에서는 필요없고 개별 항목 선택시에만 떠야 하기 때문에 조건문 사용 -->
    <?php
    if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?php echo $_GET['id']?>">update</a>
  <?php } ?>

    <h2>
      <?php
      print_title();
      ?>
    </h2>
    <?php
    print_description();
    ?>
    <form action="update_process.php" method="POST">
      <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
      <p><input type="text" name="title"placeholder="제목을 입력하세요" value="<?php print_title();?>"></p>
      <p><textarea name="description"placeholder="내용을 입력하세요"><?php print_description();?></textarea></p>
      <p><input type="submit"></p>
    </form>

    <?php
    require_once('view/bottom.php');
    ?>
