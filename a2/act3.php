<?php
$monthNames = array ("Gener", "Febrer", "Març", "Abril", "Maig", "Juny", "Juliol", "Agost", "Septembre", "Octubre", "Novembre", "Decembre");
if (!isset($_REQUEST["mes"])) $_REQUEST["mes"] = date("M");
if (!isset($_REQUEST["any"])) $_REQUEST["any"] = date("Y");
$cMonth = $_REQUEST["mes"];
$cYear = $_REQUEST["any"];
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;
if ($prev_month == 0) {
    $prev_month == 12;
    $prev_year == $cYear -1;
}
if ($next_month == 13) {
    $next_month == 1;
    $next_year = $cYear +1;
}

<table width="200" style="border:1px solid #999">
<tr align="center">
<td bgcolor="#999999" style="color:#FFFFFF">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="50%" align="left"><a href="<?php echo $_SERVER["PHP_SELF"]."?mes=". $prev_month."&any=".$prev_year; ?>" style="color:#FFFFFF">Anterior</a></td>
<td width="50%" align="right"><a href"<?php echo $_SERVER["PHP_SELF"]."?mes=". $prev_month."&any=".$prev_year; ?>" <style>="color:#FFFFFF">Següent</a></td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center">
<table width="100%" border="0" cellpadding="2" cellspacing="2">
<tr align="center">
<td collspan="7" bgcolor="999999" style="color:#FFFFFF"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
</tr>
<tr>
<td align="center" bgcolor="999999" style="color:#FFFFFF"><strong>Dilluns</strong></td>
<td align="center" bgcolor="999999" style="color:#FFFFFF"><strong>Dimarts</strong></td>
<td align="center" bgcolor="999999" style="color:#FFFFFF"><strong>Dimecres</strong></td>
<td align="center" bgcolor="999999" style="color:#FFFFFF"><strong>Dijous</strong></td>
<td align="center" bgcolor="999999" style="color:#FFFFFF"><strong>Divendres</strong></td>
<td align="center" bgcolor="999999" style="color:#FFFFFF"><strong>Dissabte</strong></td>
<td align="center" bgcolor="999999" style="color:#FFFFFF"><strong>Diumenge</strong></td>
</tr>
?>
