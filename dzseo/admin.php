<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}


$servername = "localhost"; 
$username = "root"; 
$password = "root"; 
$dbname = "photostudio";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}


$sql = "SELECT * FROM applications ORDER BY submission_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявки на фотосессию</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Администрация фотостудии</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
                 
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="logout.php">Выход</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <h1>Заявки на фотосессию</h1>

    <?php if ($result->num_rows > 0): ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Контактные данные</th>
                    <th>Тип фотосъемки</th>
                    <th>Дата отправки</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['session_type']; ?></td>
                        <td><?php echo $row['submission_date']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Нет заявок.</p>
    <?php endif; ?>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
