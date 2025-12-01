<?php
$conn = new mysqli("https://www.hkmdehradun.org/", "hkm_d", "^%SK?xW-d9Fb", "hkm_d");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM contactdata";
$result = $conn->query($sql);

$rows = [];
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

header('Content-Type: application/json');
echo json_encode($rows);
