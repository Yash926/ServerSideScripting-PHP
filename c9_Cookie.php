<?php
echo "<h2>Create Cookie in PHP</h2>";
$cookie_name="user";
$cookie_value="John Doe";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");  //86400sec = 1 day
// setcookie($cookie_name,$cookie_value,time()+(0),"/");  //86400sec = 1 day
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name]))
{
    echo "Cookie named ".$cookie_name." is not set!";
}
else{
    echo "Cookie named ".$cookie_name." is set!<br>";
    echo "Value is ".$_COOKIE[$cookie_name];
}
?>
</body>
</html>