<?php
require_once('lib/print.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Everybody ⇆ Forum</title>
  <meta name="description" content="Welcome to Everybody-Forum!">

  <link rel="stylesheet" href="css/global.css?v=1.0">
  <link rel="stylesheet" href="css/home.css?v=1.0">
</head>
<body>
  <header>
    <!--
    <strong><a class="active" href="/">Index ⇠ Forum</a></strong>
    -->
    <strong><a class="active" href="/">SUSTAINABLE☀WEBSITES✿NGO</a></strong>
    <p>Open for everyone</p>
  </header>
  <main>
    <aside>
      <ol>
        <?php
        print_list();
        ?>
      </ol>
    </aside>