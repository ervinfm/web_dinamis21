<?php
$myDir = "c:/xampp2/htdocs/Asisten_pwd/upload_file/";
$dir = opendir($myDir);
echo "Isi folder (klik link untuk download : <br>";
while ($tmp = readdir($dir)) {
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
}
closedir($dir);
