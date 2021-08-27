<?php
require('lib/print.php');
require('view/top.php');
?>
<article>

  <nav>
    <a href="/" id="back"><span id="back-arrow"></span></a>
    <a href="create.php" id="create">☕️ create</a>
    <a href="#">show websites</a>
  </nav>

  <!-- create -->
  <form action="create_process.php" method="post">
    <fieldset>
      <label>Title:</label>
      <input type="text" name="title" placeholder="title" required>
    </fieldset>
    <fieldset>
      <label>Textarea:</label>
      <textarea rows="15" cols="75" name="comment" placeholder="comment" required></textarea>
    </fieldset>
    <fieldset>
      <button type="submit">Submit</button>
    </fieldset>
  </form>
</article>
<?php
require('view/bottom.php');
?>