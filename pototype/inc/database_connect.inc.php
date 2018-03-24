<?php
include_once 'config.inc.php';
$connect = new mysqli($config['db']['host'], $config['db']['user'], $config['db']['pass'], $config['db']['name']);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>