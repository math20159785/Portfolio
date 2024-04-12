<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredPin = isset($_POST['pin']) ? $_POST['pin'] : '';

    // Check if the entered PIN is valid
    if ($enteredPin == '1004') { // Change '1004' to your desired PIN
        // Set the PIN and its expiration time
        $_SESSION['pin'] = $enteredPin;
        $_SESSION['pin_expiration'] = time() + 1800; // 30 minutes expiration time

        // Redirect to the main content
        header('Location: ../index.php');
        exit();
    } else {
        $error = 'Invalid PIN. Please try again.';
    }
}

// If the PIN is already set and valid, redirect to the main content
if (isset($_SESSION['pin']) && $_SESSION['pin'] == '1004' && time() <= $_SESSION['pin_expiration']) {
    header('Location: ../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIN Entry</title>
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
    <div id="error-container">
        <?php if (isset($error)) { echo '<p class="error-message">' . $error . '</p>'; } ?>
    </div>

    <div id="pin-entry">
        <form id="pin-form" method="post">
            <label for="pin">Enter your PIN CODE:</label>
            <div class="folder">
                <img src='../img/folder.png'>
            </div>
            <input type="password" id="pin" name="pin" required minlength="4" maxlength="4">
            <div id="pin-keyboard">
                <?php
                for ($i = 1; $i <= 9; $i++) {
                    echo '<button type="button" class="pin-key" onclick="appendToPin(' . $i . ')">' . $i . '</button>';
                }
                echo '<button type="button" class="pin-key" id="clear" onclick="clearPin()">X</button>';
                echo '<button type="button" class="pin-key" onclick="appendToPin(0)">0</button>';
                echo '<button type="button" class="pin-key" id="enter-key" onclick="submitForm()">↲</button>';
                ?>
            </div>
        </form>
    </div>

    <script>
    function appendToPin(number) {
        // Get the current PIN value
        var currentPin = document.getElementById('pin').value;

        // Check if the PIN length is less than 4
        if (currentPin.length < 4) {
            // Append the new number to the existing PIN
            document.getElementById('pin').value += number;
        } else {
            // Display an error message (adjust as needed)
            alert('PIN code should be 4 digits only.');
        }
    }

    function clearPin() {
        document.getElementById('pin').value = '';
    }

    function submitForm() {
        document.getElementById('pin-form').submit();
    }

    document.addEventListener('keypress', function (event) {
        // Check if the pressed key is a number (0-9) or Enter
        if ((event.key >= '0' && event.key <= '9') || event.key === 'Enter') {
            // Check if the focus is not inside the PIN input field
            if (document.activeElement.id !== 'pin') {
                if (event.key !== 'Enter') {
                    appendToPin(event.key);
                    event.preventDefault(); // Prevent the default behavior
                } else {
                    submitForm();
                }
            }
        }
    });
    </script>
</body>
</html>
