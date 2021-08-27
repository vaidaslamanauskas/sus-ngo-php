<?php
file_put_contents('data/'.$_POST['title'], $_POST['comment']);
header('Location: /index.php?id='.$_POST['title']);
?>