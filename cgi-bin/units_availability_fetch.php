<?php
    require_once '/home/frankencluster/public_html/group01/db_connect.php';

    session_start();
    
    if($_SESSION['usertype'] != 'admin'){
        $sql = "select un.unit_id, un.address_line1, un.address_line2, un.type, un.rent_price, un.is_available, un.comments from tbl_units as un ".
                "where un.is_available = 1 ".
                "order by un.address_line2;";
        echo '<table class="table">';
    }else{
        $sql = "select un.unit_id, un.address_line1, un.address_line2, un.type, un.rent_price, un.is_available, un.comments from tbl_units as un ".
                "order by un.address_line2;";
        echo '<table class="hoverTable">';
    }


    // Construct message content
    $units_requests = mysql_query($sql);

    echo '<tr>';
    echo '<th class="resident_form_cell">Street Address</th>';
    echo '<th class="resident_form_cell">Unit #</th>';
    echo '<th class="resident_form_cell">Floorplan</th>';
    echo '<th class="resident_form_cell">Price</th>';
    echo '<th class="resident_form_cell">Availability</th>';
    echo '<th class="resident_form_cell">Comments</th>';
    if ($_SESSION['usertype'] == 'admin'){
        echo '<th class="resident_form_cell">Update</th>';
    }
    echo '</tr>';

    $i = 0;
    while($row = mysql_fetch_row($units_requests))
    {
        echo '<form id="update_row'.$i.'" name="delete_row" method="post" action="/cgi-bin/units_availability_update.php">';
        echo "<tr>";
        echo '<input type="hidden" name="unit_id" value="'.$row[0].'">';
        if ($_SESSION['usertype'] != 'admin'){
            echo '<td class="resident_form_cell">'.$row[1].'</td>';
            echo '<td class="resident_form_cell">'.$row[2].'</td>';
            echo '<td class="resident_form_cell">'.$row[3].'</td>';
            echo '<td class="resident_form_cell">'.$row[4].'</td>';
            echo '<td class="resident_form_cell">Available!!!</td>';
            echo '<td class="resident_form_cell">'.$row[6].'</td>';
        }else{
            echo '<td class="resident_form_cell"><input id="addr_line1" name="addr_line1" type="text" value="'.$row[1].'" ></td>';
            echo '<td class="resident_form_cell"><input id="addr_line2" name="addr_line2" type="text" value="'.$row[2].'" ></td>';
            echo '<td class="resident_form_cell"><input id="type" name="type" type="text" value="'.$row[3].'" ></td>';
            echo '<td class="resident_form_cell"><input id="price" name="price" type="text" value="'.$row[4].'" ></td>';
            
            echo '<td class="resident_form_cell"><select name="availability" class="status_input">';
            if($row[5] == 0){
                echo '<option selected="selected">Occupied</option>';
                echo '<option>Available!!!</option>';
            }else{
                echo '<option>Occupied</option>';
                echo '<option selected="selected">Available!!!</option>';
            }
            echo '</select>';
            echo '<td class="resident_form_cell"><input id="comments" name="comments" type="text" value="'.$row[6].'" ></td>';
            echo '<td class="resident_form_cell"><button form="update_row'.$i.'" id="button1" name="updatebutton" class="pay_button">Update Status</button>';
            echo '</form>';
        }
        echo '</td>';
        echo '</tr>';
        $i++;
    }
    echo '</table>';
?>
