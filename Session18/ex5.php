<?php
$connecct_mysql = mysqli_connect("localhost", "root", "");
$result = mysqli_query($connecct_mysql, "SELECT * FROM Employees");
    while ($row = mysqli_fetch_row($result))
    {
        printf("%s (%s)\n", $row[0], $row[1]);
    }
?>