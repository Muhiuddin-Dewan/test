<?php
// Check if the form is submitted
if (isset($_POST['login'])) {
    // Define the correct username and password
    $correctUsername = 'dewan@gmail.com';
    $correctPassword = '12345';

    // Retrieve user input
    $enteredUsername = $_POST['email'];
    $enteredPassword = $_POST['password'];

    // Check if username and password are correct
    if ($enteredUsername == $correctUsername && $enteredPassword == $correctPassword) {
        // Redirect to admindonorlist.php on successful login
        header("Location: admindonorlist.php");
        exit();
    } else {
        // Display an error message if username or password is incorrect
        echo "Username or password is incorrect";
    }
}
?>
