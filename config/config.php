<?php

/*
 * Файл настроек
 * */
// Константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

//используемы шаблон
$template = 'default';

//пути к шаблонам
define ('TemplatePrefix', "../views/{$template}");
define ('TemplatePostfix', '.tpl');

//пути к файлам шаблонов в вебпространсте
define('TemplateWebPath', "/templates/{$template}/");

//инициализация шаблона смарти
require ('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);