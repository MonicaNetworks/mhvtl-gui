<html>
<link href="styles.css" rel="stylesheet" type="text/css">

<head><title>MHVTL</title></head>
<body>
<body bgcolor="#cccccc">
<hr width="100%" size=10 color="blue">
</br>


<?php
$DOI = $_REQUEST['doi'];
$V1 = $_REQUEST['lid'];
$V2 = $_REQUEST['channel'];
$V3 = $_REQUEST['ltarget'];
$V4 = $_REQUEST['lun'];
$V5 = $_REQUEST['vi'];
$V6 = $_REQUEST['lpi'];
$V7 = $_REQUEST['lprl'];
$V8 = $_REQUEST['lusn'];
$V0 = $_REQUEST['naa'];
$V9 = $_REQUEST['llp'];
$VBK = $_REQUEST['bkfv'];
$VBA = $_REQUEST['es'];

$VR3 = $_REQUEST['mc'];
$VBA = $_REQUEST['es'];

$sum_total_slots = $VR3 + $VBA;
if ($sum_total_slots > 15001 ) {
	echo "<hr width=100% size=1 color=blue>";
	echo "<table border=1>";
	echo "<br>";
	echo "<FONT COLOR=red size=4 >Error !</FONT>";
	echo "<br>";
	echo "<FONT COLOR=red size=3 >Total number of Library Slots exceeded 15000 !</FONT>";
	echo "<br>";
	echo "<FONT COLOR=red size=3 >Both empty and full slot count must not exceed 15000</FONT>";
	echo "<br>";
	echo "<br>";
	echo "<FORM ACTION=form.setup.complete.php><INPUT TYPE=SUBMIT VALUE=Return> </FORM>";
	echo "</table>";
	exit(0);
}

$t0 = `echo "Library: "'$V1'" CHANNEL: "'$V2'" TARGET: "'$V3'" LUN: "'00' >/tmp/device.conf.tmp`;
$t1 = `echo " Vendor identification: "$V5>>/tmp/device.conf.tmp`;
$t2 = `echo " Product identification: "$V6 >>/tmp/device.conf.tmp`;
$t3 = `echo " Product revision level: "$V7 >>/tmp/device.conf.tmp`;
$t4 = `echo " Unit serial number: "$V8 >>/tmp/device.conf.tmp`;
$t5 = `echo " NAA: "'$V1:11:22:33:ab:$V2:$V3:00' >>/tmp/device.conf.tmp`;
$cmd = `echo " Home directory:" $V9 >>/tmp/device.conf.tmp`;

if ( "$VBK" == "Default" ) {
	$cmd = `echo " Backoff: 400"  >>/tmp/device.conf.tmp`;
} else {
	$cmd = `echo " Backoff:" $VBK  >>/tmp/device.conf.tmp`;
}


$VRN = $_REQUEST['nod'];
$VARx = $_REQUEST['did'];
$VARr = $_REQUEST['sn'];
$VAR1 = $_REQUEST['dlid'];
$VAR2 = $_REQUEST['channel'];
$VAR3d = $_REQUEST['dtarget'];
$VAR4 = $_REQUEST['lun'];
$VAR5 = $_REQUEST['dvi'];
$VAR6 = $_REQUEST['pi'];
$VAR7 = $_REQUEST['prl'];
$VAR8 = $_REQUEST['usn'];
$VAR0 = $_REQUEST['naa'];
$VARa = $_REQUEST['ce'];
$VARb = $_REQUEST['cf'];
$VARc = $_REQUEST['ro'];
$VARd = $_REQUEST['ro1'];
$VARe = $_REQUEST['rw'];
$VARf = $_REQUEST['rw1'];
$VARg = $_REQUEST['wm'];
$VARh = $_REQUEST['wm1'];
$VARi = $_REQUEST['ecr'];
$VARj = $_REQUEST['ecr1'];
$ROC = $_REQUEST['roc'];
$RO1C = $_REQUEST['ro1c'];
$RWC = $_REQUEST['rwc'];
$RW1C = $_REQUEST['rw1c'];
$WMC = $_REQUEST['wmc'];
$WM1C = $_REQUEST['wm1c'];
$ECRC = $_REQUEST['ecrc'];
$ECR1C = $_REQUEST['ecr1c'];
$VCTT = $_REQUEST['ctt'];
$VBK = $_REQUEST['bkfv'];
$VBA = $_REQUEST['es'];

$oputa = `echo >>/tmp/device.conf.tmp`;
$oputd = `echo "Drive: $VARx CHANNEL: $VAR2 TARGET: $VAR3d LUN: $VAR4" >>/tmp/device.conf.tmp`;
$oput0 = `echo " Library ID: "'$VAR1'" Slot: "'$VARr' >>/tmp/device.conf.tmp`;
$oput1 = `echo " Vendor identification: "'$VAR5'>>/tmp/device.conf.tmp`;
$oput2 = `echo " Product identification: "'$VAR6' >>/tmp/device.conf.tmp`;
$oput3 = `echo " Product revision level: "'$VAR7' >>/tmp/device.conf.tmp`;
$oput4 = `echo " Unit serial number: "'$VAR8' >>/tmp/device.conf.tmp`;
$oput5 = `echo " NAA: "'$VAR1:11:22:33:ab:$VAR2:$VAR3d:$VAR4' >>/tmp/device.conf.tmp`;
$oputu = `echo " Compression: factor $VARb enabled $VARa" >>/tmp/device.conf.tmp`;
$output6 = `echo " Compression type: "'$VCTT' >>/tmp/device.conf.tmp`;

if ( "$VBK" == "Default" ) {
	$cmd = `echo " Backoff: 400"  >>/tmp/device.conf.tmp`;
} else {
	$cmd = `echo " Backoff:" $VBK  >>/tmp/device.conf.tmp`;
}


$oput6 = `if [ $DOI = "yes" ]&& [ $ROC = "yes" ] ; then echo " READ_ONLY: "'$VARc' >>/tmp/device.conf.tmp; fi`;
$oput7 = `if [ $DOI = "yes" ]&& [ $RO1C = "yes" ] ; then echo " READ_ONLY: "'$VARd' >>/tmp/device.conf.tmp; fi`;
$oput8 = `if [ $DOI = "yes" ]&& [ $RWC = "yes" ] ; then echo " READ_WRITE: "'$VARe' >>/tmp/device.conf.tmp;fi`;
$oput9 = `if [ $DOI = "yes" ]&& [ $RW1C = "yes" ] ; then echo " READ_WRITE: "'$VARf' >>/tmp/device.conf.tmp;fi`;
$oputx = `if [ $DOI = "yes" ]&& [ $WMC = "yes" ] ; then echo " WORM: "'$VARg' >>/tmp/device.conf.tmp;fi`;
$oputy = `if [ $DOI = "yes" ]&& [ $WM1C = "yes" ] ; then echo " WORM: "'$VARh' >>/tmp/device.conf.tmp;fi`;
$oputz = `if [ $DOI = "yes" ]&& [ $ECRC = "yes" ] ; then echo " ENCRYPTION: "'$VARi' >>/tmp/device.conf.tmp;fi`;
$oputq = `if [ $DOI = "yes" ]&& [ $ECR1C = "yes" ] ; then echo " ENCRYPTION: "'$VARj' >>/tmp/device.conf.tmp;fi`;

$makemoredrives = `sudo -u root ../scripts/make_more_drives "$VRN" "$VARx" "$VARr" "$VAR1" "$VAR2" "$VAR3d" "$VAR4" "$VAR5" "$VAR6" "$VAR7" "$VAR8" "$VAR0" "$VARa" "$VARb" "$VARc" "$VARd" "$VARe" "$VARf" "$VARg" "$VARh" "$VARi" "$VARj" "$DOI" "$ROC" "$RO1C" "$RWC" "$RW1C" "$WMC" "$WM1C" "$ECRC" "$ECR1C" "$VCTT" "$VBK" `;

$output = `cat /tmp/device.conf.tmp`;
echo "<pre>$output</pre>";

echo "<hr width=100% size=1 color=blue>";
$VMN = $_REQUEST['nom'];
$VRN = $_REQUEST['nod'];
$VR0 = $_REQUEST['li'];
$VR1 = $_REQUEST['mt'];
$VR2 = $_REQUEST['mp'];
$VR3 = $_REQUEST['mc'];
$VBA = $_REQUEST['es'];

$run = `sudo -u root ../scripts/make_library_contents "$VR1" "$VR2" "$VR3" "$VRN" "$VMN" "$V9" "$VR0" "$VBA" >/tmp/library_contents.$VR0`;
$checkunique = `sudo -u root grep unique /tmp/library_contents.$VR0|wc -l`;
$run2 = `sudo -u root cp -f /tmp/library_contents.$VR0 /etc/mhvtl/library_contents.$VR0`;
$out2 = `sudo -u root cat /etc/mhvtl/library_contents.$VR0`;
echo "<pre>$out2</pre>";
?>


<?php
if ($checkunique == 0 ) {
	echo "<hr width=100% size=1 color=blue>";
	echo "<FORM ACTION=update.device.conf.library.php> <INPUT TYPE=SUBMIT VALUE=Finish> </FORM>";
	echo "<FORM ACTION=form.setup.complete.php> <INPUT TYPE=SUBMIT VALUE=Cancel> <INPUT TYPE=SUBMIT VALUE=Return> </FORM>";
} else {
	echo "<hr width=100% size=1 color=blue>";
	echo "<b><FONT COLOR=red>Media barcode not unique </FONT></b>";
	echo "<FORM ACTION=update.device.conf.library.php> <INPUT TYPE=SUBMIT style='color: #FF0000' VALUE=Overwrite> </FORM>";
	echo "<FORM ACTION=form.setup.complete.php> <INPUT TYPE=SUBMIT VALUE=Cancel> <INPUT TYPE=SUBMIT VALUE=Return> </FORM>";
}
?>

</body>
</html>

