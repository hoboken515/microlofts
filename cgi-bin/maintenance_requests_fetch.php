<?php
	require_once '/home/frankencluster/public_html/group01/db_connect.php';
	
    $sql = "select m.maint_request_id, u.address_line2, m.date_created, m.unit_area, m.status from tbl_maint_requests as m ".
        "join tbl_residents as r on r.resident_id = m.resident_id ".
        "join tbl_units as u on u.unit_id = r.unit_id ".
        "order by m.date_created desc;";

	// Construct message content
	$maintenance_requests = mysql_query($sql);

    echo '<table class="hoverTable">';
    echo '<tr>';
    echo '<th class="resident_form_cell">Request ID</th>';
    echo '<th class="resident_form_cell">Unit #</th>';
    echo '<th class="resident_form_cell">Date Created</th>';
    echo '<th class="resident_form_cell">Department</th>';
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
		echo '<td class="resident_form_cell">';
            echo '<form id="update_row'.$i.'" name="delete_row" method="post" action="/cgi-bin/maintenance_requests_update.php">';
            echo '<input type="hidden" name="request_id" value="'.$row[0].'">';
            echo '<select name="status" class="status_input">';
            if($row[4] == 'Open'){
                echo '<option selected="selected">Open</option>';
                echo '<option>Closed</option>';
            }else{
                echo '<option>Open</option>';
                echo '<option selected="selected">Closed</option>';
            }
            echo '</select>';
            echo '<button form="update_row'.$i.'" id="button1" name="updatebutton" class="pay_button">Update Status</button>';
            echo '</form>';
        echo '</td>';
		echo '</tr>';
        $i++;
    }
    echo '</table>';
?>
