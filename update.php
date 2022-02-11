<?php
	include "db_connect.php"; 
	$id = $_GET['id'];
	$title = $_POST['title'];
	$artist = $_POST['artist'];
	$query=mysqli_query ($connection, "UPDATE tb_album SET title='$title', artist='$artist' WHERE id='$id'")or die (mysqli_error());

if($query) {

?>

<script language="JavaScript"> document.location='index.php'</script>
<?php
}
?> 

