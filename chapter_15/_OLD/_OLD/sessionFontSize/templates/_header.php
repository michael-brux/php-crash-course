<!doctype html>
<html lang="en">
<head>
    <style>
        body {
            background-color: <?= $color ?>;
            font-size: <?= $fontSize ?>rem;
        }
    </style>
    <title>MGW</title>
</head>

<body>
<pre>
    body {
        background-color: <?= $color ?>;
        font-size: <?= $fontSize ?>rem;
    }
</pre>

<nav>
    <ul>
        <ul>
            <li>
                <a href="/index.php?action=setFontSize15">Font Size 1.5</a>
            </li>

            <li>
                <a href="/index.php?action=setFontSize2">Font Size 2</a>
            </li>

            <li>
                <a href="/index.php?action=setBackgroundPink">Pink</a>
            </li>

            <li>
                <a href="/index.php?action=setBackgroundGrey">Grey</a>
            </li>

            <li>
                <a href="/index.php?action=resetSession">Kill session (reset to defaults)</a>
            </li>
        </ul>
</nav>
<hr>
<main>
