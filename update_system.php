<?php
session_start();
include('./db_connect.php');
ob_start();

$newSystemName = "CITE EVALUATION SYSTEM"; 


if ($conn->query("UPDATE system_settings SET name = '$newSystemName'") === TRUE) {
    $_SESSION['system']['name'] = $newSystemName; 
    echo "System name updated successfully";
} else {
    echo "Error updating system name: " . $conn->error;
}

ob_end_flush();
?>
