<?php
    $host='mysqldbsvraz01.mysql.database.azure.com'; # MySQL Host
    $mysql_user="sqladmin";# MySql Username
    $mysql_pwd="Password@123"; # MySql Password
    $dbms="ebill_amol"; # Database

    $con = mysqli_connect($host,$mysql_user,$mysql_pwd,$dbms);
    if (!$con) die('Could not connect: ' . mysql_error());
    mysqli_select_db($con,$dbms) or die("cannot select DB" . mysql_error());

//     $con = mysqli_init();
// mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
// mysqli_real_connect($conn, "mysqldbsvraz01.mysql.database.azure.com", "sqladmin", "{your_password}", "{your_database}", 3306, MYSQLI_CLIENT_SSL);
?>