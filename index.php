<?php
include "db_connect.php";
$query = mysqli_query ($connection, "SELECT * FROM tb_album")or die (mysqli_error()); 
$jumlah = mysqli_num_rows($query); 
    echo "<html>"; echo "<head>";
    echo "<link href='style.css' type='text/css' rel='stylesheet'>"; 
    echo "</head>";
    echo "<title> My Album </title>"; 
    echo "<body>";
    echo "<font color='black' face='Tahoma' size=4><b><br>My    Albums</b></font><br><br>";
    echo "<a href='add.php' style=\"text-decoration: none\"><font face='tahoma' size='3'>Add New Album</font></a><br>"; 
    echo "<br><table border=\"0\" cellpadding=\"1\" cellspacing=\"1\"bordercolor=\"blue\"bgcolor=\"black\">
    <tr bgcolor='black' height=\"30\"><font color='white'>
    <th align='center'><font color='white' face='Tahoma' size=2>NO</font></th>
    <th align='center'><font color='white' face='Tahoma' size=2>Title</font></th>
    <th align='center'><font color='white' face='Tahoma' size=2>Artist</font></th>
    <th align='center'><font color='white' face='Tahoma' size=2>Action</font></th>
    </tr>"; $j=0;

while ($row=mysqlI_fetch_array($query)) {
    echo "<tr><td align='left' bgcolor='#38C36A'>";
    echo "<font face='Arial' size=2>";
    echo $j+1;
    echo"</font>";
    echo"</td>";
    echo "<td align='left' bgcolor='#38C36A'>";
    echo "<font face='Arial' size=2>";
    echo $row["title"];
    echo"</font>";
    echo"</td>"; 
    echo "<td align='left'bgcolor='#38C36A'>";
    echo "<font face='Arial' size=2>";
    echo $row["artist"];
    echo"</font>";
    echo"</td>"; 
    echo"<td align='left'bgcolor='#38C36A'>";
    echo "<a href='delete.php?id=".$row['id']."' style=\"text-decoration:none\" title=\"Delete\"><font color='red' face='tahoma' size='2'>Delete</font></a> <a href='edit.php?id=".$row['id']."' style=\"text-decoration:none\" title=\"Edit\"><font color='black' face='tahoma' size='2'>Edit</font></a>"; $j++;
} 
    echo "</table>";
    echo "</body>"; 
    echo "</html>";
?>
