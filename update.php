<?php
require('lib/print.php');
require('view/top.php');
?>
<article>

  <div class="actions">
    <a href="create.php">☕ create</a>
    <?php if (isset($_GET['id'])) {
      ?> <a href="update.php?id=<?=$_GET['id']?>">🥛 update</a>
    <?php } ?>
  </div>

  <form action="update_process.php" method="post">
    <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
    <p>
      <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
    </p>
    <p>
      <textarea rows="15" cols="75" name="description" placeholder="Description"><?php print_description(); ?></textarea>
    </p>
    <p>
      <input type="submit" name="Submit">
    </p>
  </form>
</article>
<?php
require('view/bottom.php');