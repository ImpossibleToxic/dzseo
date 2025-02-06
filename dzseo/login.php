<?php
session_start(); // Запускает сессию, чтобы можно было использовать переменные сессии

// Проверяет, был ли отправлен POST-запрос
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username']; // Получает значение логина из формы
    $password = $_POST['password']; // Получает значение пароля из формы

    // Проверяет, соответствует ли логин и пароль заданным значениям
    if ($username === 'admin' && $password === 'password') {
        $_SESSION['loggedin'] = true; // Устанавливает переменную сессии, указывающую на успешный вход
        header("location: admin.php"); // Перенаправляет на страницу администратора
        exit; // Завершает выполнение скрипта
    } else {
        $error = "Неверный логин или пароль."; // Устанавливает сообщение об ошибке при неверных данных
    }
}
?>
<!DOCTYPE html> <!-- Определяет тип документа как HTML5 -->
<html lang="ru"> <!-- Начало HTML-документа с указанием языка (русский) -->
<head>
    <meta charset="UTF-8"> <!-- Устанавливает кодировку символов на UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Настройки для адаптивного дизайна на мобильных устройствах -->
    <title>Вход администратора</title> <!-- Заголовок страницы, отображаемый в вкладке браузера -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Подключает CSS-файл Bootstrap для стилизации страницы -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light"> <!-- Создает навигационную панель с использованием классов Bootstrap -->
        <a class="navbar-brand" href="index.php">Фотостудия</a> <!-- Логотип или название сайта, ссылающееся на главную страницу -->
        <div class="collapse navbar-collapse"> <!-- Контейнер для элементов навигации -->
            <ul class="navbar-nav mr-auto"> <!-- Начало ненумерованного списка для навигационных ссылок -->
                <li class="nav-item"><a class="nav-link" href="working_hours.php">Режим работы</a></li> <!-- Ссылка на страницу режима работы -->
                <li class="nav-item"><a class="nav-link" href="services.php">Услуги</a></li> <!-- Ссылка на страницу услуг -->
                <li class="nav-item"><a class="nav-link" href="pricing.php">Стоимость работ</a></li> <!-- Ссылка на страницу цен -->
                <li class="nav-item"><a class="nav-link" href="contacts.php">Контакты</a></li> <!-- Ссылка на страницу контактов -->
            </ul>
        </div>
    </nav>

<div class="container mt-5"> <!-- Контейнер Bootstrap с отступом сверху для центрирования содержимого -->
    <h2>Вход администратора</h2> <!-- Заголовок второго уровня для страницы входа администратора -->

    <?php if (isset($error)): ?> <!-- Проверяет, установлено ли сообщение об ошибке -->
        <div class="alert alert-danger"><?php echo $error; ?></div> <!-- Отображает сообщение об ошибке, если оно есть -->
    <?php endif; ?>

    <form action="" method="POST"> <!-- Начало формы, данные отправляются на ту же страницу методом POST -->
        <div class="form-group"> <!-- Группа элементов формы для логина -->
            <label for="username">Логин:</label> <!-- Метка для поля ввода логина -->
            <input type="text" class="form-control" id="username" name="username" required> <!-- Поле ввода логина, обязательное для заполнения -->
        </div>
        <div class="form-group"> <!-- Группа элементов формы для пароля -->
            <label for="password">Пароль:</label> <!-- Метка для поля ввода пароля -->
            <input type="password" class="form-control" id="password" name="password" required> <!-- Поле ввода пароля, обязательное для заполнения -->
        </div>
        <button type="submit" class="btn btn-primary">Войти</button> <!-- Кнопка для отправки формы, стилизованная как кнопка Bootstrap -->
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Подключает библиотеку jQuery (облегченная версия) для работы с JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> <!-- Подключает Popper.js для управления всплывающими элементами (например, подсказками) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Подключает JavaScript-файл Bootstrap для интерактивных компонентов -->
</body>
</html>
