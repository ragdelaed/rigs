<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>Site</th>
							<th>ID</th>
							<th>MD5</th>
							<th>URL</th>
							<th>Local Path</th>
							<th>Timestamp</th>
							<th>Matches</th>
						</tr>';



    // if query results contains rows then fetch those rows 
    if ($result = $db->query("select * from pasties where matches <> '' order by timestamp desc")) {
    	$number = 1;
    while ($row = $result->fetch_assoc()) {
    		$data .= '<tr>
				<td>'.$row['site'].'</td>
				<td>'.$row['id'].'</td>
				<td>'.$row['md5'].'</td>
				<td><a href='.$row['url'].'>'.$row['url'].'</td>
				<td>'.$row['local_path'].'</td>
				<td>'.$row['timestamp'].'</td>
				<td>'.$row['matches'].'</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="8">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>
