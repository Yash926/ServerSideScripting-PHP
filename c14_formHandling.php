<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $email = $_POST["email"];
        $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        if(preg_match($pattern, $email)) {
            echo "Valid email address.<br>";
        } else {
            echo "Invalid email address.<br>";
        }
        
        ?>
    Welcome
    <br />
    Your email address is <?php
        echo $_POST["email"];

    ?>
    <br />
    Your Institution is <?php
        echo $_POST["institution"];
    ?>
    <br />
    Note for Organisation <?php
        echo $_POST["note"];
    ?>
    <br />
</body>
</html>