<?php
session_start(); // Запускает сессию для управления пользователями и их данными

// Проверяет, вошел ли пользователь в систему. Если нет, перенаправляет на страницу входа
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php"); // Перенаправление на страницу логина
    exit; // Завершает выполнение скрипта
}

// Настройки подключения к базе данных
$servername = "localhost"; // Имя сервера базы данных
$username = "root"; // Имя пользователя для подключения к базе данных
$password = "root"; // Пароль для подключения к базе данных
$dbname = "photostudio"; // Имя базы данных

// Создает новое соединение с базой данных
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяет наличие ошибок при подключении к базе данных
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error); // Если ошибка, выводит сообщение и завершает выполнение
}

// SQL-запрос для получения всех заявок, отсортированных по дате отправки (последние сначала)
$sql = "SELECT * FROM applications ORDER BY submission_date DESC";
$result = $conn->query($sql); // Выполняет запрос и сохраняет результат
?>

<!DOCTYPE html>
<html lang="ru"> <!-- Начало HTML-документа с указанием языка -->
<head>
    <meta charset="UTF-8"> <!-- Устанавливает кодировку символов на UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Настройки для адаптивного дизайна на мобильных устройствах -->
    <title>Заявки на фотосессию</title> <!-- Заголовок страницы -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Подключает CSS-файл Bootstrap для стилизации страницы -->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- Создает навигационную панель с использованием классов Bootstrap -->
    <a class="navbar-brand" href="#">Администрация фотостудии</a> <!-- Логотип или название сайта -->
    <div class="collapse navbar-collapse"> <!-- Контейнер для элементов навигации -->
        <ul class="navbar-nav mr-auto"> <!-- Начало ненумерованного списка для навигационных ссылок -->
            <!-- Здесь можно добавить дополнительные ссылки, если нужно -->
        </ul>
        <ul class="navbar-nav ml-auto"> <!-- Список для правой части навигации -->
            <li class="nav-item"><a class="nav-link" href="logout.php">Выход</a></li> <!-- Ссылка на выход из системы -->
        </ul>
    </div>
</nav>

<div class="container"> <!-- Контейнер Bootstrap для центрирования содержимого и задания отступов -->
    <h1>Заявки на фотосессию</h1> <!-- Заголовок первого уровня для страницы -->

    <?php if ($result->num_rows > 0): ?> <!-- Проверяет, есть ли результаты в запросе -->
        <table class="table table-bordered"> <!-- Создает таблицу с границами -->
            <thead>
                <tr> <!-- Заголовок таблицы -->
                    <th>ID</th> <!-- Заголовок столбца ID -->
                    <th>Имя</th> <!-- Заголовок столбца Имя -->
                    <th>Контактные данные</th> <!-- Заголовок столбца Контактные данные -->
                    <th>Тип фотосъемки</th> <!-- Заголовок столбца Тип фотосъемки -->
                    <th>Дата отправки</th> <!-- Заголовок столбца Дата отправки -->
                </tr>
            </thead>
            <tbody> <!-- Начало тела таблицы -->
                <?php while ($row = $result->fetch_assoc()): ?> <!-- Цикл по всем строкам результата запроса -->
                    <tr>
                        <td><?php echo $row['id']; ?></td> <!-- Выводит ID заявки -->
                        <td><?php echo $row['name']; ?></td> <!-- Выводит имя заявителя -->
                        <td><?php echo $row['contact']; ?></td> <!-- Выводит контактные данные заявителя -->
                        <td><?php echo $row['session_type']; ?></td> <!-- Выводит тип фотосъемки -->
                        <td><?php echo $row['submission_date']; ?></td> <!-- Выводит дату отправки заявки -->
                    </tr>
                <?php endwhile; ?> <!-- Конец цикла -->
            </tbody>
        </table>
    <?php else: ?> <!-- Если нет результатов запроса -->
        <p>Нет заявок.</p> <!-- Сообщение о том, что заявок нет -->
    <?php endif; ?> <!-- Конец условия -->

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Подключает библиотеку jQuery (облегченная версия) для работы с JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> <!-- Подключает Popper.js для управления всплывающими элементами (например, подсказками) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Подключает JavaScript-файл Bootstrap для интерактивных компонентов -->
</body>
</html>

<?php
$conn->close(); // Закрывает соединение с базой данных
?>
