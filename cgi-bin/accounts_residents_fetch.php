<?php
    require_once '/home/frankencluster/public_html/group01/db_connect.php';
    
    session_start();
    
    if($_SESSION['usertype'] == 'admin'){
        $residents_collect_sql ="select r.resident_id, r.first_name, r.last_name, un.address_line2, r.email, r.phone_number, r.account_balance from users as u ".
                            "join tbl_residents as r on u.user_id = r.user_id ".
                            "join tbl_units as un on r.unit_id = un.unit_id;";
    }else{
        $residents_collect_sql ="select r.resident_id, r.first_name, r.last_name, un.address_line2, r.email, r.phone_number, r.account_balance from users as u ".
                            "join tbl_residents as r on u.user_id = r.user_id ".
                            "join tbl_units as un on r.unit_id = un.unit_id ".
                            "where u.username = '".$_SESSION['username']."';";
    }

    $resident_table = mysql_query($residents_collect_sql);


    echo '<table class="hoverTable">';
    echo '<tr>';
    echo '<th class="resident_form_cell">ID</th>';
    echo '<th class="resident_form_cell">First Name</th>';
    echo '<th class="resident_form_cell">Last Name</th>';
    echo '<th class="resident_form_cell">Unit #</th>';
    echo '<th class="resident_form_cell">Email</th>';
    echo '<th class="resident_form_cell">Phone</th>';
    echo '<th class="resident_form_cell">Balance</th>';
    echo '<th class="resident_form_cell">Update</th>';

    $i = 0;
    while($row = mysql_fetch_row($resident_table))
    {
        echo '<form id="resident_update_row'.$i.'" name="update_row" method="post" action="/cgi-bin/accounts_residents_update.php">';
            echo "<tr>";
            echo '<td class="resident_form_cell"><input id="r_id" name="r_id" type="hidden" value="'.$row[0].'" >'.$row[0].'</td>';
            if($_SESSION['usertype'] == 'admin'){
                echo '<td class="resident_form_cell"><input id="fname" name="fname" type="text" value="'.$row[1].'" ></td>';
                echo '<td class="resident_form_cell"><input id="lname" name="lname" type="text" value="'.$row[2].'" ></td>';
            }else{
                echo '<td class="resident_form_cell">'.$row[1].'</td>';
                echo '<td class="resident_form_cell">'.$row[2].'</td>';
            }
            echo '<td class="resident_form_cell">'.$row[3].'</td>';
            echo '<td class="resident_form_cell"><input id="email" name="email" type="text" value="'.$row[4].'" ></td>';
            echo '<td class="resident_form_cell"><input id="phone" name="phone" type="text" value="'.$row[5].'" ></td>';
            if($_SESSION['usertype'] == 'admin'){
                echo '<td class="resident_form_cell"><input id="balance" name="balance" type="text" value="'.$row[6].'" ></td>';
            }else{
                echo '<td class="resident_form_cell">'.$row[6].'</td>';
            }
            echo '<td><button form="resident_update_row'.$i.'" id="button1" class="pay_button" align="center">Update</button></td>';
            echo '</tr>';
        echo '</form>';
        $i++;
    }

    echo '</table>';

?>
