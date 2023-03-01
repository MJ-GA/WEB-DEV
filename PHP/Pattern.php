<?php
echo "<pre style='background-color:#00FFFF; font-weight:bold; margin-top:15%;margin-left:40%; margin-right:45%'>";
for ($i = 1; $i < 8; $i++) {
    for ($j = $i; $j < 8; $j++)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
    echo "<br>";
}
$n = 8;
for ($i = 8; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "&nbsp;&nbsp;";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("&nbsp;*");
    echo "<br>";
}
echo "</pre>";
?>