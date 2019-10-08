<?php

$device = '/dev/cu.usbmodem142201';

#$command = "mode $device: BAUD=9600 PARITY=N data=8 stop=1 XON=off TO=on";
#system($command, $retVar);

#if ($retVar == '127'){
#  echo("Command not found:$command<br>");
#  exit;
#}


$fp = fopen($device,'r'); //use this for Linux
$cnt=0;

if (!$fp) {
  echo "Not accessible";
  exit;
}

echo "Connected!";

$cnt=0;
while(true) {
  $row = fgets($fp);
  displayValues($row);

  $cnt++;
}

fclose($fp);
exit;

function displayValues($row)
{
  $data = explode(",", $row);
  
}