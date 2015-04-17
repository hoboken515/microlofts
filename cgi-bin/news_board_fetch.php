<?php
	require_once '/home/frankencluster/public_html/group01/db_connect.php';
	
	// Construct message content
	$news_board = mysql_query("SELECT * FROM tbl_news ORDER BY timestamp DESC LIMIT 10;");

    echo '<table class="hoverTable">';
    echo '<tr>';
    echo '<th class="resident_form_cell">Date</th>';
    echo '<th class="resident_form_cell">Topic Name</th>';
    echo '<th class="resident_form_cell">Comments</th>';
    echo '<th class="resident_form_cell">Delete</th>';
    echo '</tr>';

    $i = 0;
    while($row = mysql_fetch_row($news_board))
    {
        echo "<tr>";
		echo '<td class="resident_form_cell">'.$row[0].'</td>';
		echo '<td class="resident_form_cell">'.$row[1].'</td>';
		echo '<td class="resident_form_cell">'.$row[2].'</td>';
		echo '<td class="resident_form_cell">';
            echo '<form id="delete_row'.$i.'" name="delete_row" method="post" action="/cgi-bin/news_board_delete.php">';
            echo '<input type="hidden" name="timestamp" value="'.$row[0].'">';
            echo '<button form="delete_row'.$i.'" id="button2" name="removebutton" color="red" class="pay_button">X</button>';
            echo '</form>';
        echo '</td>';
		echo '</tr>';
        $i++;
    }
    echo '</table>';
?>
