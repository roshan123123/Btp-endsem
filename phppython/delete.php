

<?php
$inp_file_pointer= $_POST["Nameoffile"];
$grades_file_pointer="Rolls_sorted_". $inp_file_pointer;
$Roll_file_pointer="Grades_sorted_". $inp_file_pointer;
if(!unlink($inp_file_pointer))
{
    echo("<h1>$inp_file_pointer cannot bee deleted due to some error \r\n</h1>");
    echo "<br>";
}
else{
    echo("<h1>$inp_file_pointer has been deleted \r\n</h1>");
    echo "<br>";
}
if(!unlink($grades_file_pointer))
{
    echo("<h1>$grades_file_pointer cannot bee deleted due to some error \r\n</h1>");
    echo "<br>";
}
else{
    echo("<h1>$grades_file_pointer has been deleted \r\n</h1>");
    echo "<br>";
}
if(!unlink($Roll_file_pointer))
{
    echo("<h1>$Roll_file_pointer cannot bee deleted due to some error \r\n</h1>");
    echo "<br>";
}
else{
    echo("<h1>$Roll_file_pointer has been deleted \r\n</h1>");
    echo "<br>";
}
?>