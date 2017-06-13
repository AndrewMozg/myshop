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

function loadPage ($controllerName, $actionName = 'index'){
    include_once PathPrefix . $controllerName. PathPostfix;
    $function = $actionName . 'Action';
    $function();
}