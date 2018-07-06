<?php
        // include Database connection file
        include("db_connection.php");

        // Design initial table header



    // if query results contains rows then fetch those rows
    if ($result = $db->query("select distinct (rigs.rack_loc) as rack_loc,SUBSTRING_INDEX(SUBSTRING_INDEX(status, ':', 2), ':', -1) AS status from rigs,rig_data where rigs.rack_loc=rig_data.rig_name and rig_data.rig_location='zombie_compound' and  timestamp >= unix_timestamp(CURRENT_TIMESTAMP - INTERVAL 10 MINUTE) * 1000 order by rack_loc")) {
    while ($row = $result->fetch_assoc()) {
                $rack_loc =$row['rack_loc'];
                $status=$row['status'];

        if (preg_match("/active/i", $status))
        {
            $class="rigs-fg-stable";
        } else
        {
            $class="rigs-fg-down";
        }

        $data .= '              <div class='.$class.'>'.$rack_loc.' - '.$status.'</div>';
        }
    }
    else
    {
        // records now found
        $data .= '<tr><td colspan="8">Records not found!</td></tr>';
    }

    if (empty($data)) {
        $data="zero";
    }

    echo $data;
?>

