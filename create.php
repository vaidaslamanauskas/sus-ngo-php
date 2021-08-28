<?php
require('lib/print.php');
require('view/top.php');
?>
<article>

  <nav>
    <a href="/" id="back"><span id="back-arrow"></span></a>
    <a href="create.php" id="create">☕️ create</a>
    <a href="#" id="websites"><span id="forward-arrow"></span></a>
  </nav>

  <!-- create -->
  <form action="create_process.php" method="post">
    <fieldset>
      <label>Title:</label>
      <input type="text" name="title" required>
    </fieldset>
    <fieldset>
      <label>Textarea:</label>
      <textarea rows="15" cols="75" name="comment" required></textarea>
      <small>Please do not spam with crap, be nice okay?</small>
    </fieldset>
    <fieldset>
      <button type="submit">Submit</button>
    </fieldset>
  </form>
</article>
</main>
<?php
require('view/bottom.php');
?>