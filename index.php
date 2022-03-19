<?php
require 'core/config.php';

function mlog($content) {
    echo "<p style=\"font-family: sans-serif;\">{$content}</p>";
}

function modulesLoader($moduleName) {
    $modulePath = __DIR__.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR.$moduleName.'.php';
    if (file_exists($modulePath)) {
        require $modulePath;
    } else {
        mlog("Модуль \"{$moduleName}\" не найден.");
    }
}

function classesLoader($className) {
    $classPath = __DIR__.DIRECTORY_SEPARATOR.'core'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.$className.'.php';
    if (file_exists($classPath)) {
        require $classPath;
    } else {
        mlog("\"{$className}\" не удалось загрузить, класс не найден.");
    }
}

try {
    modulesLoader('telemetry');
    classesLoader('layout');

    Layout::load();
} catch(Exception $e) {
    echo "<b>Ошибка при загрузке:</b> <code style=\"background: red; color: black; font-weight: bold;\">{$e}</code>";
    return null;
}
