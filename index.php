<?php

// Premiere ligne
$date = getdate();
echo $date['weekday'];
echo "<br><br>";

// Deuxieme ligne
echo date ("Y.m.d", mktime(null, null,null,12,10,2018));
echo "<br><br>";

// Troisieme ligne
echo date("h:i:s", mktime(11,35,07));

