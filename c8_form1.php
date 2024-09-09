<!DOCTYPE html>
<html lang="en">
<head>
    Form Validation
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <?php
    $name=$email=$gender=$comment=$website=" ";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=test_input($_POST["name"]);
        $email=test_input($_POST["email"]);
        $website=test_input($_POST["website"]);
        $gender=test_input($_POST["gender"]);
    }

    function test_input($data)
    {
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" placeholder="Enter your name"><br><br>
        Email: <input type="email" name="email" placeholder="Enter your email"><br><br>
        Website: <input type="text" name="website" placeholder="Enter your website"><br><br>
        Comment: <textarea name="Remarks" placeholder="Remark">Enter your remarks</textarea>
        Gender:
        <input type="radio" name="gender" value="male">Male;
        <input type="radio" name="gender" value="female">Female;
        <input type="radio" name="gender" value="other">Other;
        <input type="submit" name="submit" value="submit"/>
    </form>
    <?php
</body>
</html>