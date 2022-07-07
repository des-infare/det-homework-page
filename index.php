<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<body class="planes">
<center>
<a href="front-end-example.php">Front-end example</a> 
<a href="csv.csv" download="MAD-FUE_(2023-02-09)-(2023-02-16).csv">CSV Example</a>
</body>

<form action="search.php" method="GET"> 
	<table class="center">
		<tr>
			<td>
				<b>From:</b>
			</td>
			<td>
				<select id="from" name="from">
					<option value=""></option>
					<option value="MAD">MAD</option>
					<option value="JFK">JFK</option>
					<option value="CPH">CPH</option>
				</select>
			</td>
			<td>
				<b>To:</b>
			</td>
			<td>
				<select id="to" name="to">
					<option value=""></option>
					<option value="AUH">AUH</option>
					<option value="FUE">FUE</option>
					<option value="MAD">MAD</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				<b>Depart:</b> 
			</td>
			<td>
				<input type="date" id="depart" name="depart">
			</td>
			<td>
				<b>Return:</b>
			</td>
			<td>
				<input type="date" id="return" name="return">
			</td>
		</tr>
		<tr>
		<td>
				<input type="submit" value="Search">
		</td>
		</tr>
	</table>
</form>
</body>


</html>