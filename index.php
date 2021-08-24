<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
<main>
  ☕ <a href="create.php">create</a>
  <?php if (isset($_GET['id'])) {
    ?> 🥛 <a href="update.php?id=<?=$_GET['id']?>">update</a>
  <?php } ?>

  <p></p>
  <h1>
    <?php
    print_title();
    ?>
  </h1>
  <?php
  print_description();
  ?>
  <?php if (isset($_GET['id'])) {
    ?>
    <p>
      <form action="delete_process.php" method="post" onsubmit="return confirm('Wait! Are you sure you want to delete?');">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="delete">
      </form>
    </p>
  <?php } ?>
</main>
</section>
</div>
<?php
require_once('view/bottom.php');
?>