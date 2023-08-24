<?php

// code for infinity free deployment
$con = mysqli_connect('localhost', 'if0_34801428', 'NVhaDM13pfozc', 'if0_34801428_courierbrosdb');

//local host config
//$con = mysqli_connect('localhost', 'root', '', 'courierbrosdb');
if (!$con) {
    die('cannot connected db');
}

?>