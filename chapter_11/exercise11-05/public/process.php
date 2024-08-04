<?php
$paint = filter_has_var(INPUT_GET, 'paint');
$lights = filter_has_var(INPUT_GET, 'lights');
$camera = filter_has_var(INPUT_GET, 'camera');
?>






<!doctype html>
<html><head><title>Car options</title></head>
<body>

<p>
    Your car options were:
</p>


<ul>

<?php
if(!empty($paint)){
    print "<li>Metallic Paint</li>";
}

if(!empty($lights)){
    print "<li>Fog Lights</li>";
}

if(!empty($camera)){
    print "<li>Reversing Camera</li>";
}

?>
</ul>

</body></html>