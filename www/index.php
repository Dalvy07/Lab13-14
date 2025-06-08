<?php
echo "<h1>LEMP Stack Works!</h1>";
echo "<h2>PHP Info:</h2>";
echo "PHP Version: " . phpversion() . "<br>";

echo "<h2>MySQL Connection Test:</h2>";
try {
    $pdo = new PDO("mysql:host=mysql;dbname=testdb", "user", "pass123");
    echo "✅ MySQL Connection: SUCCESS<br>";
    echo "Database: testdb<br>";
} catch(PDOException $e) {
    echo "❌ MySQL Connection: FAILED - " . $e->getMessage() . "<br>";
}

echo "<h2>Links:</h2>";
echo "<a href='http://localhost:6001' target='_blank'>phpMyAdmin (port 6001)</a><br>";
echo "<a href='http://localhost:4001'>This page (port 4001)</a>";
?>