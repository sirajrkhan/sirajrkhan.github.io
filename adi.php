<?php 
	echo "Bismillah<br>"; 
	
	#set up the GET method
		# Assuming you are hitting some URL/Exe and that returns you an array with comma separated value;
		# Something like this: 
			#$devices = exec ('myExecFile_URL');
		#so you have an array with all values in $devices
		
	$devices = array(
		array('1','Fan','192.168.1.1','0'), 
		array('2','AC','192.168.1.2','1'), 
		array('3','Fridge','192.168.1.3','1'), 
		array('4','LCD','192.168.1.4','0'), 
		array('5','Computer','192.168.1.5','1')
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
	.red{
		background-color:red;
	}
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
		  <td><label>
			<input type="radio" name="status" value="On" id="status_0">
			On</label>
			<label>
			  <input type="radio" name="status" value="Off" id="status_1" checked>
		  Off</label></td>
		  <td><p>Current Status: OFF</p></td>
	</tr>	
<?php }; ?>
		
	<!-- Loop Ends /-->
	
	<!--
    <tr>
      <td>2</td>
      <td>A.C.</td>
      <td>192.168.1.2</td>
      <td><label>
        <input name="status2" type="radio" id="status_3" value="On" checked >
        On</label>
        <label>
          <input type="radio" name="status2" value="Off" id="status_4">
      Off</label></td>
      <td><p>Current Status: ON</p></td>
    </tr>
    <tr>
      <td>3</td>
      <td>LED</td>
      <td>192.168.1.3</td>
      <td><label>
        <input type="radio" name="status3" value="On" id="status_5" >
        On</label>
        <label>
          <input type="radio" name="status3" value="Off" id="status_6" checked>
      Off</label></td>
      <td><p>Current Status: OFF</p></td>
    </tr>
	-->
	
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
