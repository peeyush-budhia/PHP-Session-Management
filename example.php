<?php
require './class.SessionManagement.php';

// Create Object
$SM = new SessionManagement();

// Start the session
$SM->sessionOpen();

// Declare some session variables
$_SESSION['is_admin'] = true;

// Check session is valid or not
if(!$SM->checkSession()) {
    echo 'Invalid session';
    $_SESSION['is_admin'] = false;
} else {
    echo 'Session validated successfully.';

    //Close the session
    $SM->sessionClose();
}
?>
