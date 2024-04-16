<?php
require db.php;
$sql = "SELECT username, fullname FROM users;";
$results = $db->query($sql);
$users = array();
while($row = $results->fetch_assoc()){
    $users[] = $row;
}
echo json_encode~($users);
