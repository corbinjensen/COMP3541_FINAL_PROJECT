<?php
$dsn = 'mysql:host=localhost';
$user = 'root';
$pass = 'root'; // Adjust if needed

try {
    $pdo = new PDO($dsn, $user, $pass);
    $sql = file_get_contents(__DIR__ . '/sql/schema.sql');
    $pdo->exec($sql);
    echo "✅ Database and tables created successfully.";
} catch (PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
