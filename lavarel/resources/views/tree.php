<!DOCTYPE html>
<html>
    <head>
        <title>Site</title>
	<link rel="stylesheet" href="dist/themes/default/style.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="dist/jstree.min.js"></script>
    </head>
    <body>
           <div class="title"><h3>Three</h3></div>
	   <div id="jstree_div" class="jstree_div"></div>
<!--           <?php echo $data;?> -->
<script>
           $('#jstree_div').jstree({ 'core' : { 'data' : [ <?php echo $data;?> ] } });
</script>
<!--	<address>Tree made using the JS-plugin JSTree</address> -->
    </body>
</html>
