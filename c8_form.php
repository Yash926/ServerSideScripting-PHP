<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome <?php
    echo $_POST["name"]." ".$_POST["Middle"]." ".$_POST["Last"];
    ?>
    <br/>
    Your email address is <?php
    echo $_POST["email"];
    ?>
    <br>
    Your address is <?php
    echo $_POST["Address"];
    ?>
    <br>
    Your Remark is <?php
    echo $_POST["Remarks"];
    ?>

</body>
</html>