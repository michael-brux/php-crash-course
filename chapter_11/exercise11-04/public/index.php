<!doctype html><html><head><title> Radio Buttons </title></head>
<body class="container">

Would you be willing to pay more for an environmentally friendly car?

<form method="GET" action="process.php">
    <br>
    <label>
        <input type="radio" name="expensiveCar" value="yes" checked>
        Yes
    </label>

    <br>
    <label>
        <input type="radio" name="expensiveCar" value="no">
        No
    </label>
    <br>
    <input type="submit">
</form>
</body>
</html>
