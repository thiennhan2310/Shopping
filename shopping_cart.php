<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/11/2015
 * Time: 2:26 PM
 */
include_once('./smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('application/templates');
$smarty->setConfigDir('application/configs');
$smarty->setCacheDir('application/cache');
$smarty->setCompileDir('application/compiles');
$smarty->display('shopping_cart.tpl');
?>