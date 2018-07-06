<?php
    include("db_connection.php");

    $data="";
    $rig_name=$_GET['rig'];


    // if query results contains rows then fetch those rows
    if ($result = $db->query("	select uptime/3600 as Uptime from rigs where rack_loc='$rig_name' order by timestamp desc limit 1 ")) {
    while ($row = $result->fetch_assoc()) {
                $data =$row['Uptime'];
                $data = ceil($data);
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

