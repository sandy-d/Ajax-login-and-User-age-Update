<?php

require_once 'app/db.php';

$data = [
    'name' => $_REQUEST['user'],
    'age' => $_REQUEST['age'],

];
$sql = "UPDATE users SET Age=:age  WHERE name=:name";
$stmt= $db->prepare($sql);
$stmt->execute($data);
header("location:index.php?updated");
?>