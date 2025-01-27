<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактная информация</title>
    <meta name="description" content="Свяжитесь с нами для записи на фотосессию или получения дополнительной информации.">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Фотостудия</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="working_hours.php">Режим работы</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Услуги</a></li>
                <li class="nav-item"><a class="nav-link" href="pricing.php">Стоимость работ</a></li>
                <li class="nav-item"><a class="nav-link" href="contacts.php">Контакты</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Вход</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Контактная информация</h1>
        <p>Email: info@photostudio.com</p>
        <p>Телефон: +7 (123) 456-78-90</p>
        <p>Адрес: г. Москва, ул. Гагарина, д. 1</p>

        <h2>Заявка на фотосессию</h2>
        <form action="submit_application.php" method="POST">
            <div class="form-group">
                <label for="name">Имя:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="contact">Контактные данные:</label>
                <input type="text" class="form-control" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="session_type">Тип фотосъемки:</label>
                <input type="text" class="form-control" id="session_type" name="session_type" required>
            </div>
            <button type="submit" class="btn btn-primary">Отправить заявку</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
