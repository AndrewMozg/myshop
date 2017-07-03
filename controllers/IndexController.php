<?php
/*
 * Контроллер главной страницы
 * */
    function testAction(){
        echo 'IndexController.php > testAction()';
    }
//Подключение модели
include_once '../models/CategoriesModel.php';



/*
 * Формирование главной страницы сайта
 *
 * */

function indexAction($smarty){

	$rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Главная страница сайта');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');

}