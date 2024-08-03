<?php
$homeLink =  $homeLink ?? '';
$contactLink =  $contactLink ?? '';
$loginLink =  $loginLink ?? '';

$pageTitle =  $pageTitle ?? '';
?>

<!doctype HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>Secure site: <?= $pageTitle ?></title>
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    >
</head>


<body class="container">

<header class="navbar navbar-expand navbar-dark d-flex mb-3 bg-primary">

    <img src="/images/logo.png" alt="logo" width="200px">

    <ul class="navbar-nav p-2">
        <li class="nav-item">
            <a class="nav-link <?= $homeLink ?>" href="/">
                Home
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?= $contactLink ?>" href="/?action=contact">
                Contact Us
            </a>
        </li>
    </ul>

    <ul class="navbar-nav ms-auto p-2">
        <li class="nav-item">
            <a class="nav-link <?= $loginLink ?>" href="/?action=login">
                Login
            </a>
        </li>
    </ul>
</header>

<div class="row bg-light p-5">
    <div class="col">
        <h1>MGW. <br>You know it makes sense!</h1>
    </div>

    <div class="col">
        <p>
            Welcome to My Great Website (MGW).
            <br>
            Now with login security!
        </p>
    </div>
</div>
