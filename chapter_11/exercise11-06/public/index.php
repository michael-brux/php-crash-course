<!doctype html><html><head><title> Checkboxes </title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    >
</head>
<body class="container">
<h1>Car optoins</h1>
<form method="GET" action="process.php">
    <p><label><input type="checkbox" name="extras[]" value="paint"> Metallic Paint</label></p>
    <p><label><input type="checkbox" name="extras[]" value="lights"> Fog lights</label></p>
    <p><label><input type="checkbox" name="extras[]" value="camera"> Reversing Camera</label></p>
    <p><input type="submit" class="btn btn-primary"></p>
</form>
</body>
</html>
