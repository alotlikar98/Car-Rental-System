<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"carrental");
	$query = "delete from addcar where c_id = $_GET[delete_car]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details of Car has been Deleted...");
	window.location.href = "DisplayCar.php";
</script>