<!DOCTYPE html>
<html>
<head>
	<title>Twitter Feed</title>
	<script type="text/javascript" src="js/tweecool.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
	 $(document).ready(function(){
		$('#tweecool').tweecool({
			username : 'tol_mms', 
		 	limit : 5  
		});
	 })
	</script>
</head>
<body>
	<div id="tweecool"></div>
</body>
</html>