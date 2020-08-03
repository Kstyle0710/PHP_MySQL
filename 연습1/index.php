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

    <form action="delete_process.php" method="POST">
      <input type="hidden" name='id' value="<?=$_GET['id']?>">
      <input type="submit" value="delete">
    </form>

    <?php } ?>

    <h2>
      <?php
      print_title();
      ?>
    </h2>
    <?php
    print_description();
    ?>
<?php
require_once('view/bottom.php');
?>
