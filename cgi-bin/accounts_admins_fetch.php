<?php
    require_once '/home/frankencluster/public_html/group01/db_connect.php';
    
//    $session_start();
    
    $employees_collect_sql ="select u.user_id, a.first_name, a.last_name, u.username, a.email from users as u ".
                            "join tbl_admins as a on u.user_id = a.user_id;";

    $employee_table = mysql_query($employees_collect_sql);


    echo '<table class="hoverTable">';
    echo '<tr>';
    echo '<th class="resident_form_cell">User ID</th>';
    echo '<th class="resident_form_cell">First Name</th>';
    echo '<th class="resident_form_cell">Last Name</th>';
    echo '<th class="resident_form_cell">Username</th>';
    echo '<th class="resident_form_cell">Email</th>';
    echo '<th class="resident_form_cell">Update</th>';

    $i = 0;
    while($row = mysql_fetch_row($employee_table))
    {
        echo '<form id="admin_update_row'.$i.'" name="update_row" method="post" action="/cgi-bin/accounts_admins_update.php">';
            echo "<tr>";
            echo '<td class="resident_form_cell"><input id="u_id" name="u_id" type="hidden" value="'.$row[0].'" >'.$row[0].'</td>';
            echo '<td class="resident_form_cell"><input id="fname" name="fname" type="text" value="'.$row[1].'" ></td>';
            echo '<td class="resident_form_cell"><input id="lname" name="lname" type="text" value="'.$row[2].'" ></td>';
            echo '<td class="resident_form_cell">'.$row[3].'</td>';
            echo '<td class="resident_form_cell"><input id="email" name="email" type="text" value="'.$row[4].'" ></td>';
            echo '<td><button form="admin_update_row'.$i.'" id="button1" class="pay_button" align="center">Update</button></td>';
            echo '</tr>';
        echo '</form>';
        $i++;
    }

    echo '</table>';

?>
