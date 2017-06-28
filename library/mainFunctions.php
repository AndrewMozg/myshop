<?php
/*
 * Основные функции
 *
 * */

/*
 * Формирование запрашиваемой страницы
 * @param string $controllerName название контроллера
 * @param string $actionNAme название функции обрабтки страницы
 * */

function loadPage ($smarty, $controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName. PathPostfix;
    $function = $actionName . 'Action';
    $function($smarty);
}

/*
 * Загрузка шаблона
 * */

function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}

//Функция отладки. Останавливает работу программы выводя значение переменных
function d($value = null, $die = 1){
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';

    if($die) die;
}