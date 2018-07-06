<?php
        // include Database connection file
        include("db_connection.php");

$data = '<div class="container"><div class="row">
';


// if query results contains rows then fetch those rows
if ($rigs_result = $db->query("select rig_name from rig_data"))
{
    while ($rigs_row = $rigs_result->fetch_assoc()) 
    {
        $rack_loc =$rigs_row['rig_name'];

        $result = $db->query("select distinct(SUBSTRING_INDEX(SUBSTRING_INDEX(status, ':', 2), ':', -1)) AS status from rigs where rack_loc='$rack_loc' and  timestamp >= unix_timestamp(CURRENT_TIMESTAMP - INTERVAL 10 MINUTE) * 1000");
        if($result->num_rows === 0)
        {
           $data .= '              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 rigs-bg-down"><a href=status.php?rig='.$rack_loc.'>'.$rack_loc.' - Miner Down</a></div>
 ';
        }
       
           
         if ($result)
        {
            while ($row = $result->fetch_assoc()) 
            {
            $status=$row['status'];


            if (preg_match("/active/i", $status))
            {
                $class="rigs-bg-stable";
            } else
            {
                $class="rigs-bg-unstable";
            }

            $data .= '              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 '.$class.'"><a href=status.php?rig='.$rack_loc.'>'.$rack_loc.' - '.$status.'</a></div>
 ';
            }
        }
        else
        {
            $data .= '<tr><td colspan="8">Records not found!</td></tr>';
        }

        if (empty($data)) 
        {
            $data="zero";
        }


        }
}
else
{
    $data .= '<tr><td colspan="8">Records not found!</td></tr>';
}

    $data .= "</div></div>";
    echo $data;
?>

