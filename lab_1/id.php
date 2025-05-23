<?php
 session_start();
 $_SESSION['student_id_1'] = '22-46405-1';
 $_SESSION['student_id_2'] = '22-48095-2';
echo "<div style='position: absolute; top: 10px; right: 10px; font-weight: bold; font-size: 30px;'>
        " . ($_SESSION['student_id_1']) . "<br>"  . ($_SESSION['student_id_2']) . "</div>";
 
?>