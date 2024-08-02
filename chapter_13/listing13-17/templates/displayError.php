<!doctype html><html><head><title>MGW: Contact Details</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    >
</head><body class="container">
<ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link" href="/">home</a></li>
    <li class="nav-item"><a class="nav-link"
                            href="/index.php?action=contact">contact details</a></li>
    <li class="nav-item"><a class="nav-link"
                            href="/index.php?action=inquiryForm">submit an inquiry</a></li>
</ul>


<h1>Errors in data for inquiry form</h1>
    <div class="alert alert-danger" role="alert">
    Sorry, there was a problem with your form submission:

    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
</div>
