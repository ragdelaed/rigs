<?php
    include("db_connection.php");

    $data="";
    $rig_name=$_GET['rig'];


    // if query results contains rows then fetch those rows
    if ($result = $db->query("select distinct(SUBSTRING_INDEX(SUBSTRING_INDEX(status, ':', 2), ':', -1)) AS status from rigs where rack_loc='$rig_name' and  timestamp >= unix_timestamp(CURRENT_TIMESTAMP - INTERVAL 10 MINUTE) * 1000")) {
    while ($row = $result->fetch_assoc()) {
                $data =$row['status'];
        }
    }
    else
    {
        // records now found
        $data .= $data;
    }

    if (empty($data)) {
        $data="zero";
    }

    echo $data;
?>

