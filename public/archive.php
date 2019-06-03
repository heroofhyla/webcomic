<?php
require_once(__DIR__ . '/../src/comic/Comic.php');
require(__DIR__ . '/../src/chunk/top.phtml');

$comic = new Comic();
echo "<ol>";
foreach($comic->ids as $id){
  echo "<li><a href='comic.php?id=$id'>Page $id</a></li>";
}
echo "</ol>";


require(__DIR__ . '/../src/chunk/bottom.phtml');
