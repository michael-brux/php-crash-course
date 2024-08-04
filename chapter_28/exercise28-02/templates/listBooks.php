<!DOCTYPE html>
<html>
<head>
    <title>book list page</title>
</head>
<body>
<h1>Book List Page</h1>

<ul>
<?php
foreach ($books as $book):
?>
    <li>
        id: <?= $book->getId() ?>
        <br>
        title: <?= $book->getTitle() ?>
        <br>
        author: <?= $book->getAuthor() ?>
        <br>
        $ <?= $book->getPrice() ?>
    </li>

<?php
endforeach;
?>
</ul>

<hr>
<p>
    <a href="/">home</a>
</p>
</body>
</html>