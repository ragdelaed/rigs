<?php
        // include Database connection file
        include("db_connection.php");
    // if query results contains rows then fetch those rows
    $data = array();

    if ($result = $db->query("select weekday(timestamp) as day,count(*) as count from pasties where timestamp >= DATE(NOW()) - INTERVAL 7 DAY group by weekday(timestamp)")) {
    foreach ($result as $row) {
        $data[] = $row;
    }
    
    print json_encode($data);

    }
?>
