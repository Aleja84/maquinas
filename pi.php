<html>
<body>
<?php
$start = microtime(true);
$area = 0.0;
$n = $_GET["n"];

for ($i = 0; $i < $n; $i++) {
    $x = ($i + 0.5)/$n;
    $area += 4.0 / (1.0 + $x*$x);
}

$result = $area / $n;
$end = microtime(true);
$exectime = $end - $start;

echo "Cálculo de PI";
printf("<br>La cte. PI con n=%d es igual a %.20f<br>", $n, $result);
printf("Tiempo de ejecución = %.10f segundos<br>", $exectime);
printf("<br>IP del servidor: %s<br>", $_SERVER['SERVER_ADDR']);
?>
</body>
</html>
