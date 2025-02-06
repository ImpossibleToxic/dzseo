<!DOCTYPE html> <!-- Определяет тип документа как HTML5 -->
<html lang="ru"> <!-- Начало HTML-документа с указанием языка (русский) -->
<head>
    <meta charset="UTF-8"> <!-- Устанавливает кодировку символов на UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Настройки для адаптивного дизайна на мобильных устройствах -->
    <title>Контактная информация</title> <!-- Заголовок страницы, отображаемый в вкладке браузера -->
    <meta name="description" content="Свяжитесь с нами для записи на фотосессию или получения дополнительной информации."> <!-- Описание страницы для поисковых систем и социальных сетей -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Подключает CSS-файл Bootstrap для стилизации страницы -->
    <link rel="stylesheet" href="assets/css/styles.css"> <!-- Подключает пользовательский CSS-файл для дополнительных стилей -->
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
                <li class="nav-item"><a class="nav-link" href="login.php">Вход</a></li> <!-- Ссылка на страницу входа для пользователей -->
            </ul>
        </div>
    </nav>

    <div class="container"> <!-- Контейнер Bootstrap для центрирования содержимого и задания отступов -->
        <h1>Контактная информация</h1> <!-- Заголовок первого уровня для страницы -->
        <p>Email: info@photostudio.com</p> <!-- Параграф с контактным email -->
        <p>Телефон: +7 (123) 456-78-90</p> <!-- Параграф с контактным номером телефона -->
        <p>Адрес: г. Москва, ул. Гагарина, д. 1</p> <!-- Параграф с адресом компании -->

        <h2>Заявка на фотосессию</h2> <!-- Заголовок второго уровня для формы заявки -->
        <form action="submit_application.php" method="POST"> <!-- Начало формы, данные отправляются на submit_application.php методом POST -->
            <div class="form-group"> <!-- Группа элементов формы для имени -->
                <label for="name">Имя:</label> <!-- Метка для поля ввода имени -->
                <input type="text" class="form-control" id="name" name="name" required> <!-- Поле ввода имени, обязательное для заполнения -->
            </div>
            <div class="form-group"> <!-- Группа элементов формы для контактных данных -->
                <label for="contact">Контактные данные:</label> <!-- Метка для поля ввода контактных данных -->
                <input type="text" class="form-control" id="contact" name="contact" required> <!-- Поле ввода контактных данных, обязательное для заполнения -->
            </div>
            <div class="form-group"> <!-- Группа элементов формы для типа фотосъемки -->
                <label for="session_type">Тип фотосъемки:</label> <!-- Метка для поля ввода типа фотосъемки -->
                <input type="text" class="form-control" id="session_type" name="session_type" required> <!-- Поле ввода типа фотосъемки, обязательное для заполнения -->
            </div>
            <button type="submit" class="btn btn-primary">Отправить заявку</button> <!-- Кнопка для отправки формы, стилизованная как кнопка Bootstrap -->
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- Подключает библиотеку jQuery (облегченная версия) для работы с JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> <!-- Подключает Popper.js для управления всплывающими элементами (например, подсказками) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Подключает JavaScript-файл Bootstrap для интерактивных компонентов -->
</body>
</html>
