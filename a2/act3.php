<?php
<table width="200" style="border:1px solid #999">
<tr align="center">
<td bgcolor="#999999" style="color:#FFFFFF">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="50%" align="left"><a href="<?php echo $_SERVER["PHP_SELF"]."?mes=". $prev_month."&anio=".$prev_year; ?>" style="color:#FFFFFF">Anterior</a></td>
<td width="50%" align="right"><a href="<?php echo $_SERVER["PHP_SELF"]."?mes=". $next_month."&anio=".$next_year; ?>" style="color:#FFFFFF">Següent</a></td>
</tr>
</table>
</td>
</tr>
<tr>
<td align="center">
<table width="100%" border="0" cellpadding="2" cellspacing="2">
<tr align="center">
<td colspan="7" bgcolor="#999999" style="color:#FFFFFF"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
</tr>
<tr>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Dilluns</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Dimarts</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Dimecres</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Dijous</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Divendres</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Dissabte</strong></td>
<td align="center" bgcolor="#999999" style="color:#FFFFFF"><strong>Diumenge</strong></td>
</tr>
>