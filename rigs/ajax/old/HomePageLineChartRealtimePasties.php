<?php
        // include Database connection file
        include("db_connection.php");
    // if query results contains rows then fetch those rows
    $data = array();

    if ($result = $db->query("select hour(timestamp) as hour,count(*) as count from pasties where timestamp >= DATE(NOW()) - INTERVAL 24 HOUR group by hour(timestamp)")) {
    foreach ($result as $row) {
        $data[] = $row;
    }
    
    print json_encode($data);

    }
?>
