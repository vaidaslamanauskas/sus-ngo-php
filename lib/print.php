<?php
function print_title() {
  if (isset($_GET['id'])) {
    echo $_GET['id'];
  } else {
    echo "Dear visitor";
  }
}

function print_description() {
  if (isset($_GET['id'])) {
    $basename = basename($_GET['id']);
    echo file_get_contents("data/".$basename);
  } else {
    echo "Welcome to Everybody-Forum!<br>Willkommen bei Jedermann-Forum!<br>Bienvenue à tous-Forum!<br>みんな-フォーラムへようこそ！<br>모두-포럼에 오신 것을 환영합니다!<br><a title=\"https://github.com/pascalcobaltphone/everybody-forum\" href=\"https://github.com/pascalcobaltphone/everybody-forum\">GitHub repository</a>";
  }
}

function print_list() {
  $list = scandir('./data');
  $i = 0;
  while ($i < count($list)) {
    if ($list[$i] != '.') {
      if ($list[$i] != '..') {
        echo "<li>☕ <a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
?>