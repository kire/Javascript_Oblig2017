<?php

header("Content-type: text/xml");
header("Content-Disposition: attachment; filename=yr.xml");

$fil = fopen("https://www.yr.no/sted/Norge/M%C3%B8re_og_Romsdal/Molde/Molde/varsel.xml","r");
while($linje = fgets($fil)) {
	echo $linje;
}

fclose($fil);

?>