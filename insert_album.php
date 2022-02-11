<?php 
    include"db_connect.php";
    $title = $_POST['title']; 
    $artist = $_POST['artist'];
    $query=mysqli_query ($connection, "INSERT INTO tb_album(title, artist) VALUES ('$title','$artist')")or die (mysqi_error());

if($query) {

?> 
    <script language="JavaScript"> 
    document.location='index.php'</script> <?php
}?>