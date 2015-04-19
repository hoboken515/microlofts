<?php
    require_once '/home/frankencluster/public_html/group01/db_connect.php';
    
    session_start();

    if($_SESSION['usertype'] == 'admin'){
        $employees_collect_sql =  "select e.employee_id, e.first_name, e.last_name, u.username, e.email, e.phone_number, e.company from users as u join tbl_employees as e on u.user_id = e.user_id;";
    }else{
        $employees_collect_sql =  "select e.employee_id, e.first_name, e.last_name, u.username, e.email, e.phone_number, e.company from users as u join tbl_employees as e on u.user_id = e.user_id where u.username = '".$_SESSION['username']."';";
    }
    $employee_table = mysql_query($employees_collect_sql);


    echo '<table class="hoverTable">';
    echo '<tr>';
    echo '<th class="resident_form_cell">ID</th>';
    echo '<th class="resident_form_cell">First Name</th>';
    echo '<th class="resident_form_cell">Last Name</th>';
    echo '<th class="resident_form_cell">Username</th>';
    echo '<th class="resident_form_cell">Email</th>';
    echo '<th class="resident_form_cell">Phone</th>';
    echo '<th class="resident_form_cell">Company</th>';
    echo '<th class="resident_form_cell">Update</th>';

    $i = 0;
    while($row = mysql_fetch_row($employee_table))
    {
        echo '<form id="employee_update_row'.$i.'" name="update_row" method="post" action="/cgi-bin/accounts_employees_update.php">';
            echo "<tr>";
            echo '<td class="resident_form_cell"><input id="e_id" name="e_id": type="hidden" value="'.$row[0].'" >'.$row[0].'</td>';
            echo '<td class="resident_form_cell"><input id="fname" name="fname": type="text" value="'.$row[1].'" ></td>';
            echo '<td class="resident_form_cell"><input id="lname" name="lname" type="text" value="'.$row[2].'" ></td>';
            echo '<td class="resident_form_cell">'.$row[3].'</td>';
            echo '<td class="resident_form_cell"><input id="email" name="email" type="text" value="'.$row[4].'" ></td>';
            echo '<td class="resident_form_cell"><input id="phone" name="phone" type="text" value="'.$row[5].'" ></td>';
            if($_SESSION['usertype'] == 'admin'){
                echo '<td class="resident_form_cell"><input id="company" name="company" type="text" value="'.$row[6].'" ></td>';
            }else{
                echo '<td class="resident_form_cell"><input id="company" name="company" type="hidden" value="'.$row[6].'" >'.$row[6].'</td>';
            }
            echo '<td><button form="employee_update_row'.$i.'" id="button1" class="pay_button">Update</button></td>';
            echo '</tr>';
        echo '</form>';
        $i++;
    }

    echo '</table>';

?>
