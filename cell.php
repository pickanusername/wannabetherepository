<html>
<head><title>Elenco Cell</title></head>

<body>
<center><table border="20">

<form name='form1' Method='POST' action='ct.php'>

<?php
        ini_set("display_errors","1");
        error_reporting(E_ALL);

        $link= pg_Connect("host=localhost dbname=cell user=gabriele password=ciao");
        if(!$link) {die("ERRORE" . pg_last_error());}
        $result= pg_query($link, "select number,utente from clients");
        $num_rows= pg_numrows($result);

        for($ri = 0; $ri < $num_rows; $ri++)
        {
                echo "<tr>\n";
                $row = pg_fetch_array($result, $ri);
echo "<td>", $row["utente"], "</td><td><input type='submit' name='but' value='", $row["number"], "'></td></tr>";

        }
         pg_close($link);


echo "</table><br><textarea name='testo' rows='5' cols='40'>Qua puoi scrivere il messaggio che deciderà il destino dell'uomo sulla terra</textarea></form></center>";
?>
</body>
</html>
