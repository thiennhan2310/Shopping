<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/11/2015
 * Time: 9:32 AM
 */
include_once('./smarty/libs/Smarty.class.php');
$smarty=new Smarty();
$smarty->setTemplateDir('application/templates');
$smarty->setConfigDir('application/configs');
$smarty->setCacheDir('application/cache');
$smarty->setCompileDir('application/compiles');

$smarty->display('index.tpl');
?>