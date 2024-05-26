<?php
function dbConnect()
{
    $servername = "localhost";
    $username = "multistream6_rsfcorporation_front";//DATABASE USERNAME
    $password = "rsfcorporation_front";//DATABASE PASSWORD
    $database = "multistream6_rsfcorporation_front";//DATABASE NAME
    $dns = "mysql:host=$servername;dbname=$database";

    try {
        $conn = new PDO($dns, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
}

function support_plugin()
{
    require_once 'support_plugin.php';
}

//return dbConnect();


//init db
/*
$log = "SELECT * FROM users WHERE acct_no =:acct_no";
$stmt = $conn->prepare($log);
$stmt->execute([
    'acct_no'=>$acct_no
]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
username = $user['username'];
*/