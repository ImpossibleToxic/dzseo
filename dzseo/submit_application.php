<?php
$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "photostudio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$name = $_POST['name'];
$contact = $_POST['contact'];
$session_type = $_POST['session_type'];

$sql = "INSERT INTO applications (name, contact, session_type) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $contact, $session_type);

if ($stmt->execute()) {
    echo "Заявка успешно отправлена!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
