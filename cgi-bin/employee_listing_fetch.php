<?php
	require_once '/home/frankencluster/public_html/group01/db_connect.php';
	
    $sql = "select company, first_name, last_name, email, phone_number from tbl_employees ".
           "order by company;";


	// Construct message content
	$maintenance_requests = mysql_query($sql);

    echo '<table class="hoverTable">';
    echo '<tr>';
    echo '<th class="resident_form_cell">Company</th>';
    echo '<th class="resident_form_cell">Contact</th>';
    echo '<th class="resident_form_cell">Email</th>';
    echo '<th class="resident_form_cell">Phone</th>';
    echo '</tr>';
<form id="add" action="/cgi-bin/news_board_insert.php" method="post">
    <table>
    <tr><td><b> Topic: </b></td><td><input id="new_topic" name="new_topic" type="text"></tr>
    <tr><td><b> Comments: </b></td><td><input id="new_comment" name="new_comment" type="textarea"></td></tr>
    </table>

    <div style="margin-top:50px">
    <button id="btn-apply" type="submit" class="btn btn-success btn-lg" >Submit</button>
    </div>    
</form>     

    $i = 0;
    while($row = mysql_fetch_row($maintenance_requests))
    {
        echo '<form id="update_row"'.$i.'" name="update_row" method="post" action="/cgi-bin/employee_listing_update.php">';
            echo "<tr>";
	    	echo '<td class="resident_form_cell">'.$row[0].'</td>';
		    echo '<td class="resident_form_cell">'.$row[1].'</td>';
    		echo '<td class="resident_form_cell">'.$row[2].'</td>';
	    	echo '<td class="resident_form_cell">'.$row[3].'</td>';
		    echo '<td class="resident_form_cell">';
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
