<?php

   
   $actname=$_FILES['file']['name'];
   $inputfile= 'file_'.rand(1,99).'_'.time().'_'.$actname;
   if(isset($_FILES['file']))
   {
       
       $file_tmp=$_FILES['file']['tmp_name'];
       
    if( move_uploaded_file($file_tmp, $inputfile))
    {
        //now think how to run python code
        //$command=escapeshellcmd('python test.py');
        $data='hello';
        $output=shell_exec("python test.py " .$inputfile);
        

    }
    else{
        echo "Could not upload the file";
    }
      
   }
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
 <?php
  $Rolls_sorted="Rolls_sorted_". $inputfile;
  $Grades_sorted="Grades_sorted_". $inputfile;
 ?>   

<h1>Download files from here</h1>
<a href="<?=$Grades_sorted;?>",target="__">Grades_sorted</a>
<br>
<a href="<?=$Rolls_sorted;?>",target="___">Roll_sorted</a>

<h2>Do not forget to delete the genereted file</h2>

<form action="delete.php" method="post" enctype="multipart/form-data">
    <h3>Press delete button to delete the generated files</h3>
    <input type="hidden" name="Nameoffile" value="<?=$inputfile;?>"/>
    <input type="submit" name="submit" value="Delete"/>
   


</form>




</center>

    
</body>
</html>