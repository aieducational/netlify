<?php
$myfile = fopen("location.txt", "w");
$txt = "lat: " . $GET["lat"]; . "long: " . $GET["long"];
fwrite($myfile, $txt);
fclose($myfile);
?>
