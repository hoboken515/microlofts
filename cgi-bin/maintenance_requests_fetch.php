<?php
    require_once '/home/frankencluster/public_html/group01/db_connect.php';

    session_start();
    
    if($_SESSION['usertype'] == 'resident'){
        $sql = "select m.maint_request_id, un.address_line2, m.unit_area, m.description,m.date_created, m.status from tbl_maint_requests as m ".
                "join tbl_residents as r on m.resident_id = r.resident_id ".
                "join users as u on r.user_id = u.user_id ".
                "join tbl_units as un on r.unit_id = un.unit_id ".
                "where u.username = '".$_SESSION['username']."' ".
                "order by m.date_created desc;";
    }else{
        $sql = "select m.maint_request_id, u.address_line2,  m.unit_area, m.description, m.date_created, m.status from tbl_maint_requests as m ".
                "join tbl_residents as r on m.resident_id = r.resident_id ".
                "join tbl_units as u on r.unit_id = u.unit_id ".
                "order by m.date_created desc;";
    }

    // Construct message content
    $maintenance_requests = mysql_query($sql);

    echo '<table class="hoverTable">';
    echo '<tr>';
    echo '<th class="resident_form_cell">Request ID</th>';
    echo '<th class="resident_form_cell">Unit #</th>';
    echo '<th class="resident_form_cell">Department</th>';
    echo '<th class="resident_form_cell">Description</th>';
    echo '<th class="resident_form_cell">Date Created</th>';
    echo '<th class="resident_form_cell">Status</th>';
    echo '</tr>';

    $i = 0;
    while($row = mysql_fetch_row($maintenance_requests))
    {
        echo "<tr>";
        echo '<td class="resident_form_cell">'.$row[0].'</td>';
        echo '<td class="resident_form_cell">'.$row[1].'</td>';
        echo '<td class="resident_form_cell">'.$row[2].'</td>';
        echo '<td class="resident_form_cell">'.$row[3].'</td>';
        echo '<td class="resident_form_cell">'.$row[4].'</td>';
        echo '<td class="resident_form_cell">';
        if ($_SESSION['usertype'] == 'admin' or $_SESSION['usertype'] == 'employee'){
            echo '<form id="update_row'.$i.'" name="delete_row" method="post" action="/cgi-bin/maintenance_requests_update.php">';
            echo '<input type="hidden" name="request_id" value="'.$row[0].'">';
            echo '<select name="status" class="status_input">';
            if($row[5] == 'Open'){
                echo '<option selected="selected">Open</option>';
                echo '<option>Closed</option>';
            }else{
                echo '<option>Open</option>';
                echo '<option selected="selected">Closed</option>';
            }
            echo '</select>';
            echo '<button form="update_row'.$i.'" id="button1" name="updatebutton" class="pay_button">Update Status</button>';
            echo '</form>';
        }else{
            echo $row[5];
        }
        echo '</td>';
        echo '</tr>';
        $i++;
    }
    echo '</table>';
?>
