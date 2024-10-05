<?php
$name=$_FILES['myfile']['name'];
$temp_name=$_FILES['myfile']['temp_name'];
if(move_uploaded_file($temp_name,$name))
{
    echo "file uploaded";
}
else{
    echo "file not uploaded";
}
?>