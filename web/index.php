<html>
<head>
	<?php include './res/templates/head.php';?>
</head>
<body>
<div>
	<div class="main-content mdl-grid">
		<div class="mdl-cell mdl-cell--1-col"></div>
		<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp mdl-cell mdl-cell--10-col mdl-cell--8-col-tablet">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric">Server</th>
					<th>Status</th>
					<th>Player Count</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">Mineplex</td>
					<td><?php //Say online or offline?>Online</td>
					<td><?php //Say player count in x/x?>15540/15541</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">Hypixel</td>
					<td>Online</td>
					<td>19583/19584</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">InfiniD Ware</td>
					<td>Offline</td>
					<td>Offline</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
	
	<!-- Load Footer -->
	<?php include './res/templates/footer.php';?>
</body>
</html>