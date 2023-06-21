
<?php 

//Database Connection

define('DB_SERVER','91.234.195.128');
define('DB_USER','c2026237c_agent');
define('DB_PASS' ,'Agent12@');
define('DB_NAME', 'c2026237c_agent');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection


if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

else{
    
    echo "Database connected successfully !!!";
    
    
}



?>


