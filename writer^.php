<html>
<?php
$myfile = fopen("way.txt", "w") or die("Unable to open file!");
$txt = "1\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
<script>window.location.href="index.php";</script>
</html>