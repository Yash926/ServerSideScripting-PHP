<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format<br>";
    } else {
        echo "Valid email: $email<br>";
    }

    
    $mobile = $_POST['mobile'];
    if (preg_match("/^[0-9]{10}$/", $mobile)) {
        echo "Valid mobile number: $mobile<br>";
    } else {
        echo "Invalid mobile number<br>";
    }

    
    if (!empty($_POST['options'])) {
        echo "Selected options:<br>";
        foreach ($_POST['options'] as $option) {
            echo $option . "<br>";
        }
    } else {
        echo "No options selected<br>";
    }
}
?>