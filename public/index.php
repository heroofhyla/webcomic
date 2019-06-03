<?php
require(__DIR__ . '/../src/chunk/top.phtml');
require_once(__DIR__ . '/../src/comic/Comic.php');
$comic = new Comic();
?>
<p>
Welcome! This is a webcomic I am creating for NaNoMangO 2019! I haven't tried
drawing a comic since 2009 or so, and I was never really any good at it. This is
all a learning experience and a personal challenge.
</p>

<ul>
<li><a href='comic.php?id=<?= $comic->latest; ?>'>Latest Comic</a></li>
<li><a href='comic.php?id=<?= $comic->first; ?>'>First Comic</a></li>
<li><a href='archive.php'>Archive</a></li>
</ul>
<?php
require(__DIR__ . '/../src/chunk/bottom.phtml');
