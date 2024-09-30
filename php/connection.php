<?php
$servername ="localhost";
$username="root";
$password= "";
$db_name ="school_login";
$conn = new mysqli($servername,$username, $password, $db_name, 3307);

if(conn->connect_error){
    die("Connection failed".Sconn->connect_error);
}
echo "Successfull"

?>