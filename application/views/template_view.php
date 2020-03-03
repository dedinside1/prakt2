<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
</head>
<body>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/main/index">Главная</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/services/index">Услуги</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/portfolio/index">Портфолио</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contacts/index">Контакты</a>
        </li>
    </ul>
</div>
</nav>
<div>
    <div class="container">
        <?php include 'application/views/'.$content_view; ?>
    </div>
</body>
</html>
