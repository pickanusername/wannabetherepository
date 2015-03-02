<html>
<head></head>
<body>

<?php
ini_set ("display_errors", "1");
error_reporting(E_ALL);

$N1 = $_POST["but"];
$B1 = $_POST["testo"];
$ww = "";

session_start();

$_SESSION["but"] = $N1;
$_SESSION["testo"] = $B1;
$_SESSION["utente"] = "SMSHY8YFB8Z1JHFFQD139:YHFODFXUGD9IE04U1PK0PIDKZ76SVFXO";

?><script>
var ww = '';
</script><?php

echo <<<MESG

<script>
eval("ww = 'curl --user NONSIDICE -XPOST https:\\/\\/api.smshosting.it\\/rest\\/api\\/sms\\/send  -d \\"from=rosco\\" -d \\"to=NUMERO\\" -d \\"text=TESTO\\"' ");
document.write(B1, '<br>');
</script>

MESG;

?>
<script>
var locat = "c2.php?ww=" + ww;
window.location.href = locat;

</script>

</body>
</html>
