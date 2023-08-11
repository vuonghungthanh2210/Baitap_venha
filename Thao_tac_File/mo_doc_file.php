<?php
    $fp = fopen('Baitho.txt', 'r') or die("Failed to create file");
    while(!feof($fp))
    { echo "<div style='color: white; background: red; width: 400px;'>";
        echo fgets($fp);
        echo "</br>";
      echo "</div>";
    }
    fclose($fp);
?>