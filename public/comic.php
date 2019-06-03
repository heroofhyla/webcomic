<p>
<?php
require_once(__DIR__ . '/../src/comic/Comic.php');
require(__DIR__ . '/../src/chunk/top.phtml');

$comic = new Comic();

if (!isset($_GET['id'])){
  $_GET['id'] = Comic::latest();
}

$id = $_GET['id'];
$first = $comic->first;
$prev = $comic->prev_id($id);
$next = $comic->next_id($id);
$last = $comic->latest;

if ($comic->is_first($id)){
  echo "First | ";
  echo "Prev | ";
} else {
  echo "<a href='comic.php?id=$first'>First</a> | ";
  echo "<a href='comic.php?id=$prev'>Prev</a> | ";
}

echo "<a href='archive.php'>Archive</a> | ";
if ($comic->is_latest($id)){
  echo "Next | ";
  echo "Latest";
} else {
  echo "<a href='comic.php?id=$next'>Next</a> | ";
  echo "<a href='comic.php?id=$last'>Latest</a>";
}
?>

</p>

<img class="page" src='<?= $comic->img_url($_GET['id']); ?>' />

<?php
require(__DIR__ . '/../src/chunk/bottom.phtml');
