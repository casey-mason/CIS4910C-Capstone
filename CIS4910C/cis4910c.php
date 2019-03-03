try {
    $conn = new PDO("sqlsrv:server = tcp:cmtracker.database.windows.net,1433; Database = CMTracker", "caseym", "{rt28bsj!}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "caseym@cmtracker", "pwd" => "{rt28bsj!}", "Database" => "CMTracker", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cmtracker.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
