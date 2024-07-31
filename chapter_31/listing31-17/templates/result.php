<!doctype html>
<html lang="en">
<head><title>results</title></head>
<body>
<a href="/">(back to home page)</a>
<hr>

<h1>Latitude and Longitude</h1>
Date = <?= $dateString ?><br>
Latitude = <?= $latitude ?><br>
Longitude = <?= $longitude ?><br>

<a href="http://www.openstreetmap.org/?zoom=17&mlat=<?= $latitude ?>&mlon=<?= $longitude ?>">
    Open maps link to: <?= $address ?>
</a>

<hr>
Sunrise <img src="/images/sunrise.png" width="50" alt="Sunrise">
<?= $sunrise ?>
<br>
Sunset <img src="/images/sunset.png" width="50" alt="Sunset">
<?= $sunset ?>
<p>
    so there will be <?= $hoursDaylight ?> of daylight
</p>

<footer>
    icon attribution:
    <a href="https://www.flaticon.com/free-icon/sunrise_3920688" title="sunrise icons">
        Sunrise</a>
    <a href="https://www.flaticon.com/free-icon/sunset_3920799" title="sunset icons">
        Sunset</a>
    icons created by Mehwish - Flaticon
</footer>
</body>
</html>
