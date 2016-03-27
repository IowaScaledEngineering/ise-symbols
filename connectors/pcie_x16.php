<?php

$y = 300;

for($pin = 82; $pin >= 0; $pin--)
{
  echo("P 0 $y 300 $y 1 0 0\n");
  echo("{\n");
  echo("T 200 " . ($y - 50) . " 5 8 0 1 0 8 1\n");
  echo("pinseq=1\n");
  echo("T 350 $y 5 8 0 1 0 2 1\n");
  echo("pintype=io\n");
  echo("T 200 " . ($y + 50) . " 5 8 0 1 0 6 1\n");
  echo("pinnumber=A$pin\n");
  echo("T 350 $y 9 8 1 1 0 1 1\n");
  echo("pinlabel=A$pin\n");
  echo("}\n");
  
  echo("P 1400 $y 1100 $y 1 0 0\n");
  echo("{\n");
  echo("T 1200 " . ($y - 50) . " 5 8 0 1 0 2 1\n");
  echo("pinseq=1\n");
  echo("T 1050 $y 5 8 0 1 0 8 1\n");
  echo("pintype=io\n");
  echo("T 1200 " . ($y + 50) . " 5 8 0 1 0 0 1\n");
  echo("pinnumber=B$pin\n");
  echo("T 1050 $y 9 8 1 1 0 7 1\n");
  echo("pinlabel=B$pin\n");
  echo("}\n");
  
  $y += 200;
}

?>
