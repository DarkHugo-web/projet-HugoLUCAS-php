<?php 
require_once 'pdoConnect.php';

$sql = "SELECT * FROM customer WHERE id=1";
$stmt = $pdo-> query($sql);
$data = $stmt->fetch();
var_dump($data);