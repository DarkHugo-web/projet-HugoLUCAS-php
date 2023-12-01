<?php

try{
    $dsn = 'mysql:host=51.158.59.186;dbname=H.L;charset=utf8mb4;port=14301';
    $username = 'phppex';
    $password = 'Supermotdepasse!42';
    $pdo = new PDO($dsn, $username, $password);
    echo "Connected successfully";
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    } 


   
 
/*$createTableQuery = "
    CREATE TABLE students (
        id SERIAL PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        nationality VARCHAR(255) NOT NULL
    )
";

$pdo -> exec($createTableQuery);*/



//$stmt = $pdo->query("SELECT * FROM students");

//$stmt = $pdo->prepare("UPDATE students SET name = :name WHERE id = :id");
//$stmt->execute(['name' => 'Jane Smith', 'id']);