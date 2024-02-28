<?php
$con = mysqli_connect("localhost", "root", "", "testimport"); #mysql lite 
if (mysqli_connect_errno()) {
    echo "Failed to connect to MYSQL: " .mysqli_connect_error();  #useful for testing if successfuly connected get rid of when completed
    exit();
}

echo "connecetd successfully"
?>
```