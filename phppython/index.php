<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<center>
    <h1>Note:</h1>
    <p>Do not alter any green boxes</p>
    <h2>Download the file and fill it and upload it with filled marks don't touch anything else </h2>

<a href="sampleinp.xlsx",target="_">Sample Input</a>

<h2>Upload file filled with marks</h2>



<form action="download.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file"/>
    <input type="submit" name="submit" value="upload"/>
   


</form>
</center>

    
</body>
</html>