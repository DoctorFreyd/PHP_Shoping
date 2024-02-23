<?php
    // Получение параметра из URL
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    // Обработка запроса и включение соответствующего содержания
    switch ($action) {
        case 'home':
            include 'index.php';
            break;
        case 'auth':
            require 'auth.php'; 
            break;
        case 'register':
            require 'register.php'; 
            break;
    }   
?>