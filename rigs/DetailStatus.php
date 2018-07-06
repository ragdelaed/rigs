

<table id="DetailStatusTable" class="tablesorter">
    <thead>
        <tr>
          <th>version</th>
          <th>GPUs</th>
          <th>overheat/throttled</th>
          <th>name</th>
          <th>status</th>
          <th>ip</th>
          <th>CPU temp</th>
          <th>hash rate</th>
          <th>temps</th>
          <th>uptime</th>
          <th>last check in</th>
        </tr>
    </thead>
<tbody>
<?php 

include("ajax/db_connection.php"); 

$rigs_details_result = $db->query("select distinct rig_name from rig_data");
while($rig_details_row = $rigs_details_result->fetch_array())
{
  $rig_details_array[] = $rig_details_row;
}

$total_hash="0";


foreach ($rig_details_array as $rig)
{
      $rig=$rig['rig_name'];


      $status_result = $db->query("select rack_loc,version,SUBSTRING_INDEX(SUBSTRING_INDEX(status, ':', 2), ':', -1) AS status,ip,miner,hash,gpus,cpu_temp,uptime/3600 as uptime,memstates,temp,models,miner_version,hostname,mobo,drive_name,pool_info,overheat,throttled,human_uptime,check_in_time from rigs where rack_loc='$rig' order by id desc limit 1");
          while ($row = $status_result->fetch_assoc())
          {
          $rack_loc=$row['rack_loc'];
          $version=$row['version'];
          $status=$row['status'];
          $ip=$row['ip'];
          $miner=$row['miner'];
          $hash=$row['hash'];
          $gpus=$row['gpus'];
          $cpu_temp=$row['cpu_temp'];
          $uptime=$row['uptime'];
          $memstates=$row['memstates'];
          $temp=$row['temp'];
          $models=$row['models'];
          $miner_version=$row['miner_version'];
          $hostname=$row['hostname'];
          $mobo=$row['mobo'];
          $drive_name=$row['drive_name'];
          $pool_info=$row['pool_info'];
          $overheat=$row['overheat'];
          $throttled=$row['throttled'];
          $human_uptime=$row['human_uptime'];
          $check_in_time=$row['check_in_time'];
          }
          $epoc = time();
          $timedifference=$epoc - $check_in_time;
          $dt = new DateTime("@$timedifference");
          $last_check_in_time= $dt->format('H:i:s');
          #print "$rig,$epoc,$check_in_time,$timedifference\n";

          $total_hash=$total_hash+$hash;
          if ($overheat = 1){$overheat_class="rigs-fg-stable";} else {$overheat_class="rigs-fg-down";};
          if ($throttled = 1){$throttled_class="rigs-fg-stable";} else {$throttled_class="rigs-fg-down";};
          if ($uptime > 5){$uptime_class="rigs-fg-stable";} else {$uptime_class="rigs-fg-down";};
          if ($hash > 100){$hash_class="rigs-fg-stable";} else {$hash_class="rigs-bg-down";};
          if ($cpu_temp < 70){$cpu_temp_class="rigs-fg-stable";} else {$cpu_temp_class="rigs-bg-down";};
          if (preg_match("/active/i", $status)){$status_class="rigs-fg-stable";} else {$status_class="rigs-bg-down";};
          
                  echo "                <tr>\n";
                  echo "                  <td align='left'>".$version."</td>\n";
                  echo "                  <td align='left'>".$gpus."</td>\n";
                  echo "                  <td align='left'>".$overheat."/".$throttled."</td>\n";
                  echo "                  <td align='left'><a href=http://".$ip." style='color: hsl(101, 87%, 21%); text-decoration: none'>".$rack_loc."</a></td>\n";
                  echo "                  <td align='left'><div class=".$status_class.">".$status."</div></td>\n";
                  echo "                  <td align='left'>".$ip."</td>\n";
                  echo "                  <td align='left'><div class=".$cpu_temp_class.">".$cpu_temp."</div></td>\n";
                  echo "                  <td align='left'><div class=".$hash_class.">".$hash."</div></td>\n";
                  echo "                  <td align='left'>".$temp."</td>\n";
                  echo "                  <td align='left'><div class=".$uptime_class.">".$human_uptime."</div></td>\n";
                  echo "                  <td align='left'>".$last_check_in_time."</td>\n";
                  echo "                </tr>\n";
}
?>
</tbody>
</table>



<?php echo "Total hash rate:$total_hash\n"; ?></tr>
