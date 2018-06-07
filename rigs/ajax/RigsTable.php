<?php
        // include Database connection file
        include("db_connection.php");

    $data.='
                      <table id="rigs_datatable" class="table table-striped table-bordered" width="100%" data-page-length="25">
                        <thead>
                          <tr>
                            <th>Host</th>
                            <th>Status</th>
                            <th>IP</th>
                            <th>Overheat</th>
                            <th>Throttle</th>
                            <th>Memstates</th>
                            <th>GPU Temps</th>
                            <th>Last Check In</th>
                            <th>LastBoot</th>
                          </tr>
                         </thead>
                        <tbody>';
    $data .="\n";


    // if query results contains rows then fetch those rows
    if ($result = $db->query("select rack_loc,status,ip,overheatedgpu,throttled,memstates,temp,FROM_UNIXTIME(unix_timestamp(now()) - uptime,'%Y-%M-%d %H:%i:%s') as LastBoot,FROM_UNIXTIME(timestamp/1000,'%Y-%M-%d %H:%i:%s') as Timestamp from rigs where status rlike 'active' and  timestamp >= unix_timestamp(CURRENT_TIMESTAMP - INTERVAL 5 MINUTE) * 1000 order by ip")) {
        $number = 1;
    while ($row = $result->fetch_assoc()) {
    if (preg_match("/active/i", $row['status'])) {
        $status_insert="<td>".$row['status']."<td>\n";
    } else {
        $status_insert="<td>".$row['status']."<td>\n";
    }
                $data .= '                          <tr>
                                <td>'.$row['rack_loc'].'</td>
                                <td>'.$row['status'].'</td>
                                <td>'.$row['ip'].'</td>
                                <td>'.$row['overheatedgpu'].'</td>
                                <td>'.$row['throttled'].'</td>
                                <td>'.$row['memstates'].'</td>
                                <td>'.$row['temp'].'</td>
                                <td>'.$row['Timestamp'].'</td>
                                <td>'.$row['LastBoot'].'</td>
                          </tr>';
                $data .="\n";
                $number++;
        }
    }
    else
    {
        // records now found
        $data .= '<tr><td colspan="8">Records not found!</td></tr>';
    }

    $data .= '                      </tbody>
                    </table>';
    echo $data;
?>
