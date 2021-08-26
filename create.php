<?php
require('lib/print.php');
require('view/top.php');
?>
<article>

  <div class="actions">
    <a href="create.php">☕ create</a>
  </div>

  <form action="create_process.php" method="post">
    <p>
      <input type="text" name="title" placeholder="Title">
    </p>
    <p>
      <textarea rows="15" cols="75" name="description" placeholder="Description"></textarea>
    </p>
    <p>
      <input type="submit" name="Submit">
    </p>
  </form>
</article>
</div>
<?php
require('view/bottom.php');
?>