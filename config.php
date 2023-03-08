<?php
$link = mysqli_connect('localhost', 'root', '', 'test');
if (!$link) {
    die('Connection error' . mysqli_connect_error());
}
?>