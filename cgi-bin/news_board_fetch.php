<?php
    require_once '/home/frankencluster/public_html/group01/db_connect.php';
    
    $sql =  "select n.timestamp, n.topic_name, n.comments, u.username from tbl_news as n join users as u on n.user_id = u.user_id order by n.timestamp desc limit 10;";

    $news_board = mysql_query($sql);

    echo '<table class="hoverTable">';
    echo '<tr>';
    echo '<th class="resident_form_cell">Date</th>';
    echo '<th class="resident_form_cell">Topic Name</th>';
    echo '<th class="resident_form_cell">Comments</th>';
    echo '<th class="resident_form_cell">Created By</th>';
    if($_SESSION['usertype'] == 'admin'){
        echo '<th class="resident_form_cell">Remove</th>';
    }
    echo '</tr>';

    $i = 0;
    while($row = mysql_fetch_row($news_board))
    {
        echo "<tr>";
        echo '<td class="resident_form_cell">'.$row[0].'</td>';
        echo '<td class="resident_form_cell">'.$row[1].'</td>';
        echo '<td class="resident_form_cell">'.$row[2].'</td>';
        echo '<td class="resident_form_cell">'.$row[3].'</td>';
        if($_SESSION['usertype'] == 'admin'){
            echo '<td class="resident_form_cell">';
            echo '<form id="admin_delete_row'.$i.'" name="delete_row" method="post" action="/cgi-bin/news_board_delete.php">';
            echo '<input type="hidden" name="timestamp" value="'.$row[0].'">';
            echo '<button form="admin_delete_row'.$i.'" id="button2" name="removebutton" color="red" class="pay_button">X</button>';
            echo '</form>';
            echo '</td>';
        }
        echo '</tr>';
        $i++;
    }

    echo '</table>';

?>
