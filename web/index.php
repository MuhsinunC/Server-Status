<html>
<head>
	<?php include './res/templates/head.php';?>
</head>
<body>
<div class="container">
	<div class="row">
		<ul class="collapsible popout" data-collapsible="accordion">
			
			<?php
			
				foreach ($configs->servernames as $key => $servertitle) {
					
					$serverip =  $configs->serverips[$key];
					$serverport =  $configs->serverports[$key];
					
					//Server Info Getter
						$json = file_get_contents('https://mcapi.us/server/status?ip=' . $serverip . '&port=' . $serverport);
						$data = json_decode($json,true);
					
						$onlinestatus = $data['online'];
					
					echo '
					
					<li>
						<div class="collapsible-header"><i class="material-icons">'. 
						
							//Online or offline response
								(($onlinestatus == 1)?'check_circle':"cancel")
							
							.'</i>'. $serverip .'</div>
						<div class="collapsible-body"><p>Server Info & Status</p></div>
					</li>
					
					';
					//check_circle is the check icon
				} //$servertitle var
			?>
			
		</ul>
	</div>
</div>
	
	<!-- Load Footer -->
	<?php include './res/templates/footer.php';?>
</body>
</html>