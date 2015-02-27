<?php
require('validateupc.inc.php');

$fp = fopen('upc-test1.csv','rb');
//$fp = fopen('upc-test2.csv','rb');
$checked=$invalid=0;
while (($row = fgetcsv($fp, 65535, ",")) !== FALSE) {
	if (!verifycheckdigit($row[0])) {
		print "Invalid: ".$row[0]."\n";
		$invalid++;
	}
	$checked++;
}
fclose($fp);
print $checked." codes checked; ".$invalid." failed validation, ".($checked-$invalid)." valid.\n";
