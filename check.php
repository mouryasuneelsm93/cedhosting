<?php
session_start();
error_reporting(0);
$otp=$_POST["otp"];
$eotp=$_POST["eotp"];

$motp=$_SESSION["mobileotp"];

if ($otp>0) {
    if ($otp==$motp) {
        echo "otp verified";
    } else {
        echo "wrong otp";
    }
}
else {
    if ($eotp==$_SESSION["eotp"]) {
        echo "otp verified";
    } else {
        echo "wrong otp";
    }
}




?>