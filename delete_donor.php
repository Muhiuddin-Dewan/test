<?php
if (isset($_POST['delete'])) {
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

    // Retrieve donor ID from the form submission
    $donorId = $_POST['donor_id'];

    // Perform the delete query
    $sql = "DELETE FROM donor_list WHERE id = $donorId";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the donor list page after successful deletion
        header("Location: admindonorlist.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
} else {
    // Redirect to an error page if accessed without the 'delete' action
    header("Location: error.php");
    exit();
}
?>
