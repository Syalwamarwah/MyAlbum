<?php
	include "db_connect.php";
	$id = $_GET['id'];
	$query = mysqli_query ($connection, "SELECT * FROM tb_album WHERE id='$id'"); 
	while ($row=mysqli_fetch_array($query)){
	$title = $row['title'];
	$artist = $row['artist'];

echo "<html>"; 
echo "<body>";
echo "<font face='tahoma' color='black' size=4><b>Update Album</b></font>"; 
echo "<table align='left'>";
echo "<form method=\"post\" action=\"update.php?id=$id\" enctype='multipart/form-data'>"; 

echo "<br>";
echo "<tr><td><font face='Tahoma' color='black' size=2>Title</font></td><td>:</td><td><input type='text' name='title' value='$title'
size='30'>&nbsp;</td></tr>";
echo "<tr><td><font face='Tahoma' color='black' size=2>Nama</font></td><td>:</td><td><input type='text' name='artist' value='$artist'
size='30'>&nbsp;</td></tr>";
echo "<tr><td></td><td></td><td><font size='2'><input type='submit' name='submit' value='Update'/></font></td></tr>"; 
echo "</table></form></body></html>";
}
?> 
