<?php
$server = 'localhost';
$uname = 'root';
$pass = '';
$dbs = 'espiritu_mad';

$db = new mysqli($server, $uname, $pass, $dbs);
if($db->connect_error){
    die('connot connect');
}