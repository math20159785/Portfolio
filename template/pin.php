<?php
session_start();

// Function to check if the PIN is set and valid
function isPinValid() {
    return isset($_SESSION['pin']) && $_SESSION['pin'] == '1004'; // Change '1234' to your desired PIN
}

// Function to set a new PIN
function setPin() {
    $_SESSION['pin'] = '1234'; // Change '1234' to your desired PIN
}

// Function to check if the PIN has expired
function isPinExpired() {
    $pinExpirationTime = isset($_SESSION['pin_expiration']) ? $_SESSION['pin_expiration'] : 0;
    return time() > $pinExpirationTime;
}

// Function to set the PIN expiration time to 30 minutes
function setPinExpiration() {
    $_SESSION['pin_expiration'] = time() + 1800; // 30 minutes expiration time
}

// Check if PIN is valid and not expired
if (!isPinValid() || isPinExpired()) {
    // Redirect to PIN entry page
    header('Location: path/pin_entry.php');
    exit();
}
?>
