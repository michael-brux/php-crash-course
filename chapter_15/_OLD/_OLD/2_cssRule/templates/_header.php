
<!doctype html>
<html lang="en">
<head>
    <style>
        <?= $cssStyleRule ?>
    </style>
    <title>MGW</title>
</head>

<body>
The style rule applied was:

<pre>
<?= $cssStyleRule ?>
</pre>
<hr>
<nav>
    <ul>
        <li>
            <a href="/">home page</a>
        </li>

        <li>
            <a href="/index.php?action=colorRed">Text color = RED</a>
        </li>

        <li>
            <a href="/index.php?action=colorBlue">Text color = BLUE</a>
        </li>

        <li>
            <a href="/index.php?action=sizeOne">Text size = 1rem</a>
        </li>

        <li>
            <a href="/index.php?action=sizeOnePointTwo">Text size = 1.2rem</a>
        </li>
        <li>
            <a href="/index.php?action=killSession">Kill session (reset to defaults)</a>
        </li>
    </ul>
</nav>
<hr>

