<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/11/2015
 * Time: 10:32 AM
 */

include_once('./smarty/libs/Smarty.class.php');
$smarty=new Smarty();
$smarty->setTemplateDir('application/templates');
$smarty->setConfigDir('application/configs');
$smarty->setCacheDir('application/cache');
$smarty->setCompileDir('application/compiles');
include_once ('class/database.php');
$db=new Database('ql_bansua');
include_once ('class/Pager.php');
$pager=new Pager();

$db->setQuery('select * from sua');
$n=$db->CountAll();
$limit=9;


$pages=$pager->findPages($n,$limit);
$start=$pager->findStart($limit);
$db->setQuery("select * from sua limit $start,$limit");
$ds=$db->loadAllRow();

$link_trang=$pager->pageList($_GET['page'],$pages);
$smarty->assign('ds',$ds);
$smarty->assign('link_trang',$link_trang);

$smarty->display('products.tpl');
?>