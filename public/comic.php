<?php
require_once(__DIR__ . '/../src/comic/Comic.php');
require(__DIR__ . '/../src/chunk/top.phtml');

$comic = new Comic();

if (!isset($_GET['id'])){
  $_GET['id'] = $comic->latest;
}

$id = $_GET['id'];

require(__DIR__ . '/../src/chunk/nav.phtml');
?>

<img class="page" src='<?= $comic->img_url($_GET['id']); ?>' />

<?php
require(__DIR__ . '/../src/chunk/nav.phtml');
require(__DIR__ . '/../src/chunk/bottom.phtml');
