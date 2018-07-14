<?php
        // include Database connection file
        include("ajax/db_connection.php");

            $data = '              <div class="container"><div class="row">
';

$rigs_result = $db->query("select distinct rig_name from rig_data");
while($rig_row = $rigs_result->fetch_array())
{
    $rig_array[] = $rig_row;
}

// if query results contains rows then fetch those rows
foreach ($rig_array as $rig)
{
        $rig=$rig['rig_name'];

        $result = $db->query("select check_in_time from rigs where rack_loc='$rig' order by id desc limit 1");
        if($result->num_rows === 0)
        {
           $data .= '              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 rigs-bg-down"><a href=status.php?rig='.$rig.'>'.$rig.' - Miner Down</a></div>
';
        }
         if ($result)
        {
            while ($row = $result->fetch_assoc()) 
            {
            $check_in_time=$row['check_in_time'];


            $epoc = time();
            $timedifference=$epoc - $check_in_time;
            $dt = new DateTime("@$timedifference");
            $last_check_in_time= $dt->format('H:i:s');        
            #print "$rig,$epoc,$check_in_time,$timedifference\n";


            if ($timedifference<800)
            {
                $class="rigs-bg-stable";
            } else
            {
                $class="rigs-bg-down";
            }

            $data .= '              <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 '.$class.'"><a href=status.php?rig='.$rig.'>'.$rig.' - '.$last_check_in_time.'</a></div>
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

    echo $data;
?>

