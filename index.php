<meta charset="utf-8">
<?php
$time=time();
echo $time;
echo "<br>";
$asfloat=true;
$microtime=microtime($asfloat);
echo $microtime;
echo "<br>";
$date=date("l dS of F Y h:i:s A");
echo $date;
echo "<br>";
$strftime=strftime("%B %Y года, %d число. Был %A, часы показывали %H:%M.");
echo $strftime;
echo "<br>";
$strtotime=strtotime("30 September 2016");
echo $strtotime;
echo "<br>";
$getdate=getdate();
print_r ($getdate);
?>