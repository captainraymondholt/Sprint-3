<?php

include 'serverConnector.php';

$name = $_GET["name"];
$username = $_GET["username"];
$email = $_GET["email"];
$note = $_GET["note"];

function containsNumber($str) {
    return preg_match('/\d/', $str) > 0;
}

if (!containsNumber($username) || strlen($username) < 6) {
    echo '<script>
			alert("Invalid username. Username must have at least 6 characters and contain at least one number.");
            window.location.href = "http://localhost/sherlocked/db_backend/contactForm.php";
            </script>';
    exit;
}
// Check if the email contains the @ symbol

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<script> 
			alert("Invalid email address."); 
			window.location.href = "http://localhost/sherlocked/db_backend/contactForm.php";
		 </script>';
    exit;
}

// Check if the email or username already exists in the database
$checkQuery = "SELECT * FROM `contactList` WHERE `Email` = '$email' OR `UserName` = '$username';";
$checkResult = $conn->query($checkQuery);

if ($checkResult->num_rows > 0) {
    // If email or username already exists, clear the form and show pop-up message
    echo '<script>
			alert("Email or Username already exists. Please redo the form.");
			window.location.href = "http://localhost/sherlocked/db_backend/contactForm.php";
		  </script>';
} else {
    $sql = "INSERT INTO `contactList` (`Name`, `UserName`, `Email`, `Note`)
            VALUES ('$name', '$username', '$email', '$note');";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        // Successful insertion, show pop-up message and clear form fields
        echo '<script>
                alert("Contact details are saved."); 
                window.location.href = "http://localhost/sherlocked/db_backend/contactForm.php";
            </script>';
    } else {
        echo "Error: " . $sql . "<br/>" . $conn->error;
    }
}
$conn->close();
?>
