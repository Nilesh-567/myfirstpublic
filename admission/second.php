<?php
// Database credentials
$host = 'localhost';
$db = 'mydb';
$user = 'root';
$pass = 'Nilesh123@';
$charset = 'utf8mb4';
// $conn=new mysqli($host,$user,$pass,$db);
// Data Source Name (DSN)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Options for PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connected successfully<br>";

    // Prepare and execute the SQL query
    $stmt = $pdo->query('SELECT * FROM mytable');

    // Fetch all records and display them
    while ($row = $stmt->fetch()) {
        echo 'ID: ' . $row['id'] . ' - Name: ' . $row['name'] . '<br>';
    }

} catch (PDOException $e) {
    // Handle any errors
    echo 'Connection failed: ' . $e->getMessage();
}
?>
