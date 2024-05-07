<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oil";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Login = $_POST['Login'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$FIO = $_POST['FIO'];
$Password = $_POST['Password'];
$Surepassword = $_POST['Surepassword'];

if ($Password !== $Surepassword) {
    echo "Passwords do not match.";
    exit;
}

$sql = "INSERT INTO users (Login, Email, Phone, FIO, Password, Surepassword) VALUES ('$Login', '$Email', '$Phone', '$FIO', '$Password', 'Surepassword')";

if ($conn->query($sql) === TRUE) {
    echo "Регистрация прошла успешна!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
