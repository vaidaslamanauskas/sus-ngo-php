<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
<article>

  <nav>
    <?php if (isset($_GET['id'])) {
      ?> <a href="/" id="back"><span id="back-arrow"></span></a>
    <?php } ?>

    <a href="create.php" id="create">🪴 create</a>

    <?php if (isset($_GET['id'])) {
      ?> <a href="update.php?id=<?=$_GET['id']?>" id="update">🙈 update</a>
    <?php } ?>

    <a href="#" id="websites"><span id="forward-arrow"></span></a>
  </nav>

  <header>
    <h1>
      <?php
      print_title();
      ?>
    </h1>
  </header>

  <?php
  print_comment();
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
</article>

<!-- readings -->
<aside>
  <ol>
    <?php
    print_list();
    ?>
  </ol>
</aside>
</main>
<?php
require_once('view/bottom.php');
?>