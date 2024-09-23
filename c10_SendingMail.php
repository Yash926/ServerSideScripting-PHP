<?php
$check=mail("yt.yashtripathi0707@gmail.com,tripathiyash143@gmail.com","testing mail","this is test mail","From: yt.yashtripathi0707@gmail.com");
if($check)
{
    echo "Email sent succeessfuly";
}
else
{
    echo "Email not sent";
}
?>