<?php
    // Получение параметра из URL
    $action = isset($_GET['action']) ? $_GET['action'] : '';

    // Обработка запроса и включение соответствующего содержания
    switch ($action) {
        case 'home':
            include 'index.php';
            break;
        case 'auth':
            include 'auth.php'; 
            break;
        case 'register':
            include 'register.php'; 
            break;
        case 'addprod':
            include 'addproduct.php';
            break;
        case 'wishlist';
            include 'wishlist.php';
            break;
        case 'shopingcart';
            include 'shopingcart.php';
            break;
    }   
?>