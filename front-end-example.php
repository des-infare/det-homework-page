<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<body>

<center>
<p>
<B class="black">
MAD-FUE 
<?php
$outbound = date('Y-m-d', strtotime(date('Y/m/09') . ' + 1 month'));
$inbound = date('Y-m-d', strtotime(date('Y/m/16') . ' + 1 month'));
echo "<BR> Outbound: $outbound";
echo "<BR> Inbound: $inbound";

echo "<BR> <a href='search.php?from=MAD&to=FUE&depart=$outbound&return=$inbound'>Search</a>";
 ?>
</B></p>
</center>

<div class="center">

<p>Visual representation of all oubound and inbound flights</p>
<img src="img/OutboundInbound.png" width="100%">
<p>After selecting first outbound option and first inbound option (both options marked with red square) we get redirected to price page, where we can see full flight info with 4 different price options</p>
<img src="img/farefamilies.png" width="100%">
<BR>
</div>
</body>