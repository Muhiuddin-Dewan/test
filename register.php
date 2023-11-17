<?php
// Include your database connection file or add the connection code here
$servername = "localhost";
$port = "3308";  // Replace with your actual database port
$username = "root";
$password = "";
$dbname = "bloodbank";

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!empty($_POST)) {
    $name = $_POST['inputName'];
    $email = $_POST['inputEmail4'];
    $contactNumber = $_POST['inputNumber'];
    $bloodGroup = $_POST['inputBloodGroup'];
    $address = $_POST['inputAddress'];
    $city = $_POST['inputCity'];

    $sql = "INSERT INTO donor_list (name, email, contact_number, blood_group, address, city)
            VALUES ('$name', '$email', '$contactNumber', '$bloodGroup', '$address', '$city')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: donorlist.php");
    exit();
} else {
    echo "Form not submitted";  // This line is added for debugging
}

$conn->close();
?>
