<?php 
	include "db_connect.php";
	$id = $_GET['id'];
	$query = mysqli_query ($connection, "DELETE FROM tb_album WHERE id = $id"); 
?>

<script language="JavaScript"> document.location='index.php'</script>

<?php
?> 

