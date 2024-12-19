<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script type="text/javascript">//alert("sdfsd");</script>
<body>
<?php
require_once("connectdb.php");
//$db_handle = new DBController();


	$query ="SELECT * FROM states WHERE countryid = '" . $_POST["countryid"] . "'";
	$results = $dbhandle->query($query);
?>
	<option value="">Select State</option>
<?php
	while($rs=$results->fetch_assoc()) {
?>
	<option value="<?php echo $rs["stateid"]; ?>"><?php echo $rs["statename"]; ?></option>
<?php

}
?>
</body>
</html>