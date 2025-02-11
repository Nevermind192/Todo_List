<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskMate</title>
    @vite(['resources/css/app-layout.css', 'resources/js/app.js'])
</head>
<body>
<div class="app-container">
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <button id="toggle-sidebar">
                <i class='bx bx-menu'></i>
            </button>
            <h1 class="logo">TaskMate</h1>
        </div>
        <div class="user-menu" id="user-menu">
            <i class="bx bx-user-circle" id="user-icon"></i>
            <div class="dropdown" id="dropdown-menu">
                <a href="#">Настройки</a>
                <a href="#">Выход</a>
            </div>
        </div>
        <nav class="menu">
            <a href="#" class="menu-item active" data-title="Задачи">
                <i class="bx bx-task"></i>
                <span class="menu-text">Задачи</span>
            </a>
            <a href="#" class="menu-item" data-title="Привычки">
                <i class="bx bx-trophy"></i>
                <span class="menu-text">Привычки</span>
            </a>
            <a href="#" class="menu-item" data-title="Календарь">
                <i class="bx bx-calendar"></i>
                <span class="menu-text">Календарь</span>
            </a>
            <a href="#" class="menu-item" data-title="Таймер">
                <i class="bx bx-timer"></i>
                <span class="menu-text">Таймер</span>
            </a>
        </nav>
    </aside>
    <div class="main-content">
        <main>
            <!-- Здесь будет содержимое выбранного раздела -->
        </main>
    </div>
</div>
</body>
</html>
