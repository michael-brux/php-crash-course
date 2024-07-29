<!doctype html>
<html><head>
    <title>MGW - equiry form</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body class="container">
<ul class="nav nav-pills">
    <li class="nav-item"><a href="/">home</a></li>
    <li class="nav-item"><a href="/index.php?action=contact">contact details</a></li>
    <li class="nav-item active"><a href="/index.php?action=enquiryForm">submit an enquiry</a></li>
</ul>

<h1>MGW Sales Enquiry</h1>
<form method="POST" action="/index.php?action=processForm">
    <div class="form-group">
        <label for="customerName">Your name</label>
        <input id="customerName" class="form-control" name="customerName">
    </div>

    <div class="form-group">
        <label for="customerEmail">Email address</label>
        <input id="customerEmail" type="email" class="form-control" aria-describedby="emailHelp" name="customerEmail">
        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="enquiry">Your enquiry</label>
        <textarea id="enquiry" class="form-control" name="enquiry" rows="3"></textarea>
    </div>

    <input type="submit" value="Submit enquiry" class="btn btn-success">
</form>
</body></html>