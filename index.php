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
include_once('./class/database.php');
$db=new Database();
$db->setQuery('select * from trang_chu limit 3,6');
$logo=$db->loadAllRow();
$smarty->assign('logo',$logo);
$smarty->display('index.tpl');
?>