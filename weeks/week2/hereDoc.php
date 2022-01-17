<?php

$book = 'The Lord Of The Rings';
$author = 'J.R.R. Tolkien';
$director = 'Peter Jackson';
$actor = 'Sir Ian McKellen';
$character = 'Gandalf';

$content = <<<CONTENT
<p>My favorite book trilogy is $book, written by $author. Director $director did an excellent job adapting the book into a movie trilogy. $actor was perfectly cast as $character.</p>

<p>If one has not seen the movie triliogy, it is best to watch the extended edition first. The regular edition cuts out scenes with character development for time. </p>
CONTENT;

echo $content;
