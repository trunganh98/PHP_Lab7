<?php
    date_default_timezone_set('Asia/Calcutta');
    echo "Today is : " .date("1");
    $Today_Date = getdate();
    $current_month = $Today_Date['month'];
    echo"<br>";
    echo "Cyrrent month is: ";
    echo $current_month;
?>