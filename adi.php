<?php 	
	#set up the GET method
		# Assuming you are hitting some URL/Exe and that returns you an array with comma separated value;
		# Something like this: 
			#$devices = exec ('myExecFileOrURL_thisShouldReturnArray');
		#so you have an array with all values in $devices -- in below format -- NO EMPTY VALUES -- ORDER & ARRAY COUNT SHOULD NOT CHANGE!!
		
	$devices = array( array('1','Fan','192.168.1.1','0'), array('2','AC','192.168.1.2','1'), array('3','Fridge','192.168.1.3','1'), array('4','LCD','192.168.1.4','0'), array('5','Computer','192.168.1.5','0')
	);
	
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Device Info</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
	</style>
</head>
<body>
<form>
  <table class="table table-striped" width="100%" border="0" cellspacing="0" cellpadding="0" summary="Information about the devices...">
    <caption>
    <h3>Device Info</h3>
    </caption>
    <tr>
      <th scope="col">Device Sr.</th>
      <th scope="col">Device Name</th>
      <th scope="col">IP</th>
      <th scope="col">Action</th>
      <th scope="col">Status</th>
    </tr>
	
	<!-- Loop Starts /-->	
	<?php for ( $i =0; $i < count($devices); $i++){ ?>		
		<tr>
			  <td><?php echo $devices[$i][0]; ?></td>
			  <td><?php echo $devices[$i][1]; ?></td>
			  <td><?php echo $devices[$i][2]; ?></td>
			  <td>
			  <?php 
				$isOn = ($devices[$i][3]=="1" ? "checked" : ""); 
			    $isOff = ($devices[$i][3]=="0" ? "checked" : ""); 
			  ?>
				<label><input type="radio" name="status<?php echo $i; ?>" value="On"  id="status_<?php echo $i; ?>" <?php echo $isOn; ?>  >On</label>
				<label><input type="radio" name="status<?php echo $i; ?>" value="Off" id="status_<?php echo $i; ?>" <?php echo $isOff; ?> >Off</label>
			  </td>
			  <td><p>Current Status (@Server): <?php echo($isOn=="")?"OFF":"ON"; ?> </p></td>
		</tr>	
	<?php }; ?>
	<!-- Loop Ends /-->
	
  </table>
  <div class="text-center">
  <button value="Apply">Apply</button>
  <button value="Refresh">Refresh</button>
  </div>
</form>
<script>

</script>
</body>
</html>
