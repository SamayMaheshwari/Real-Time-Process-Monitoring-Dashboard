<?php
header('Content-Type: application/json');
include 'db_config.php';

$result = $conn->query("SELECT * FROM processes ORDER BY id DESC LIMIT 10");
$processes = [];

while ($row = $result->fetch_assoc()) {
    $processes[] = $row;
}

$cpuUsage = rand(20, 90);
$memoryUsage = rand(30, 80);

echo json_encode(["processes" => $processes, "cpuUsage" => $cpuUsage, "memoryUsage" => $memoryUsage]);

$conn->close();
?>
