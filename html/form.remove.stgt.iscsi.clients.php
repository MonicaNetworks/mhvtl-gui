<html>
<head><title>MHVTL</title></head>
<link href="styles.css" rel="stylesheet" type="text/css">
<body>
<hr width="100%" size=10 color="blue">
<b><font color=purple size=3>STGT Targets</font><b>
<hr width="100%" size=1 color="blue">

<tr>
<td align=left valign=middle>
<img src="images/configuration.png" >
</td>
</tr>

<?php
echo "<pre><b>Remove ACL :</b></pre>";
?>

<hr width="100%" size=1 color="blue">

<?php
include_once "common.php";

exit_if_tgtd_not_eabled();

$target = `sudo -u root -S ../scripts/build_html_opts.sh target`;
$isct = `sudo -u root -S ../scripts/build_html_opts.sh iscsiclient`;

if ( "$isct" == "" ) {
	echo "<FONT COLOR=#FF0000>No ACL Exist</FONT>";
	echo "</FORM>";
	echo "<br>";
	echo "<hr width='100%' size=1 color='blue'>";
	echo "<FORM ACTION='stgt.php'><INPUT TYPE=SUBMIT VALUE='Return'></FORM>";
	echo "</table>";
} else {
	echo "<form method='post' action='remove.stgt.iscsi.clients.php'>";
	echo "Select  Target $target";
	echo "<br>";
	echo "Select Initiator $isct";
	echo "<SELECT name='mode' hidden readonly><option>target</OPTION></select>";
	echo "<br>";
	echo "<hr width='100%' size=1 color='blue'>";
	echo "<input type='submit'></form>";
	echo "<FORM ACTION='stgt.php'> <INPUT TYPE=SUBMIT VALUE='Return'> <INPUT TYPE=SUBMIT VALUE='Cancel'> </FORM>";
}
?>
</body>
</html>
