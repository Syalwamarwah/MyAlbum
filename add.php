<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Add New Album</title>
 <link href="style.css" type="text/css" rel="stylesheet">
 </head>

 <body>
    <form action="insert_album.php" method="POST">
        <font face="Tahoma" color="black" size="3"><b><br>Add New Album</b></font>
 <table align="left">

 <tr>
    <br>
    <td><font face="Tahoma" color="black" size="2">Title</font></td>
    <td>:</td>
    <td><input type="text" name="title" size="30"></td>
 </tr>

 <tr>
    <td><font face="Tahoma" color="black" size="2">Artist</font></td>
    <td>:</td>
    <td><input type="text" name="artist" size="30"></td>
 </tr>
 <tr>
    <td></td><td></td>
    <td><input type="submit" value="Add">
    <font face="Tahoma" color="black" size="2">
    <a href="index.php" style="text-decoration:none">Back</font></a>
    </td>
 </tr>

 </table>
 </form>
 </body>
</html>
