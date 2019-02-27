<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_webcliente = "localhost";
$database_webcliente = "webcliente";
$username_webcliente = "root";
$password_webcliente = "";
$webcliente = mysql_pconnect($hostname_webcliente, $username_webcliente, $password_webcliente) or trigger_error(mysql_error(),E_USER_ERROR); 
?>