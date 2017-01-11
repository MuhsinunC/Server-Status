<html>
<head>
	<?php include './res/templates/head.php';?>
</head>
<body>
<div class="container">
	<div class="row">
		<table class="highlight responsive-table">
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
					<td>
						<span class="mdl-chip">
							<span class="mdl-chip__text">Online</span>
						</span>
					</td>
					<td>19583/19584</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric">InfiniD Ware</td>
					<td>Offline</td>
					<td>Offline</td>
				</tr>
			</tbody>
		</table>
		<ul class="collapsible popout" data-collapsible="accordion">
			<li>
				<div class="collapsible-header"><i class="fa fa-check-circle-o" aria-hidden="true"></i>Mineplex</div>
				<div class="collapsible-body"><p>Server Info & Status</p></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-check-circle-o" aria-hidden="true"></i>Hypixel</div>
				<div class="collapsible-body"><p>Server Info & Status</p></div>
			</li>
			<li>
				<div class="collapsible-header"><i class="fa fa-times-circle-o" aria-hidden="true"></i>InfiniD Ware</div>
				<div class="collapsible-body"><p>Server Info & Status</p></div>
			</li>
		</ul>
	</div>
</div>
	
	<!-- Load Footer -->
	<?php include './res/templates/footer.php';?>
</body>
</html>