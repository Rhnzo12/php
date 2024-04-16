<?php
require 'db.php';

header('Access-Control-Allow-Origin: http://localhost:53532'); // Allow requests from your Flutter app's origin
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE'); // Allow these methods
header('Access-Control-Allow-Headers: Content-Type'); // Allow Content-Type header

$sql = "SELECT username, fullname FROM users;";
$results = $db->query($sql);
$users = array();
while ($row = $results->fetch_assoc()) {
    $users[] = $row;
}
echo json_encode($users);
?>
