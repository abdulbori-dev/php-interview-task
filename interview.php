<?php
/**
 * Interview Test Task
 * Abdulboriy Madmusayev
 */

$endpoint = "https://test.icorp.uz/private/interview.php";
$msg = "Hello from PHP script!";
$uri = "https://jsonplaceholder.typicode.com/posts/1"; // test url shunchaki pustoy qabul qilmaydi $uri ni

$payload = json_encode([
    "msg" => $msg,
    "uri" => $uri
]);

// birinchi so‘rov
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
$response1 = curl_exec($ch);
curl_close($ch);

$data1 = json_decode($response1, true);
$part1 = $data1["part1"];
echo "Birinchi qism: $part1\n";

$ch = curl_init($uri);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response2 = curl_exec($ch);
curl_close($ch);

$data2 = json_decode($response2, true);
$part2 = $data2["part2"];
echo "Ikkinchi qism: $part2\n";

$finalCode = $part1 . $part2;

$payloadFinal = json_encode([
    "code" => $finalCode
]);

$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payloadFinal);
$responseFinal = curl_exec($ch);
curl_close($ch);

$dataFinal = json_decode($responseFinal, true);
echo "Yakuniy xabar: " . $dataFinal["message"] . "\n";
