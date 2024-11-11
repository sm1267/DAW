<?php
$host = 'sql304.infinityfree.com';  // e.g., 'localhost' or 'mysql.hostingprovider.com'
$dbname = 'if0_37694028_fitnessdb';
$user = 'if0_37694028';
$password = '3uX2oZZuv2k0Ok';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>