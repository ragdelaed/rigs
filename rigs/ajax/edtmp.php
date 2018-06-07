<?php
// include Database connection file
include("db_connection.php");

// Design initial table header
$data .= '      <h3>home</h3>
                <div class="container-fluid">
                <div class="row">'



if ($result = $db->query("select distinct (rigs.rack_loc) as rack_loc,rigs.status from rigs,rig_data where rigs.rack_loc=rig_data.rig_name and rig_data.rig_location='home'")) 
{

    while ($row = $result->fetch_assoc()) 
    {
        $rack_loc =$row['rack_loc'];
        $status =$row['status'];
        
        if (preg_match("/active/i", $status)) 
        {
            $class="rigs-bg-stable";
        } else 
        {
            $class="rigs-bg-down";
        }
    
        $data .= '              <div class='.$class.'>'.$rack_loc.'</div>\n';
    }
    $data .= '</div>'
}
else
{
        $data .= '<tr><td colspan="8">Records not found!</td></tr>';
}

    if (empty($data)) {
        $data="zero";
    }

echo $data;

?>

