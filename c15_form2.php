<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" placeholder="First Name" required><br><br>

            <label for="lname">Last Name:</label>
            <input type="text" name="lname" placeholder="Last Name" required><br><br>

            <label for="age">Age:</label>
            <input type="number" name="age">

            <input name="save_btn" type="submit">
            <button><a href="./view.php">View</a></button>
        </form>
    </div>
    <?php 
        if(isset($_POST['save_btn'])) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $age = $_POST['age'];

            $query = "INSERT INTO student (fname, lname, Age) VALUES ('$fname', '$lname', '$age')";
            $data = mysqli_query($con, $query);
            if($data) {
                echo "Entered data saved successfully";
            } else {
                echo "Please enter data Again";
            }
        }
    ?>
</body>
</html>