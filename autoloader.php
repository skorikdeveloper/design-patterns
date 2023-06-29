<?php
spl_autoload_register(function ($className) {
    $filePath = '';

    // Преобразуем пространства имен в путь к файлу
    $namespace = 'DesignPatterns\\'; // Замените на ваше пространство имен

    if (strpos($className, $namespace) === 0) {
        $relativeClassName = substr($className, strlen($namespace));
        $filePath = str_replace('\\', '/', $relativeClassName) . '.php';
    }

    // Проверяем, существует ли файл
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});
