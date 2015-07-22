<?php
chdir(dirname(__DIR__));
define('root','http://localhost/Shopping');
require_once ('Smarty/libs/Smarty.class.php');
require_once ('Model/database.php');
require_once ('Model/san_pham/m_san_pham.php');
    class smarty_shopping extends Smarty
    {
        function __construct(){
   parent::__construct();
   $this->setConfigDir('View/configs');
   $this->setCacheDir('View/caches');
    $this->setTemplateDir('View/templates');
    $this->setCompileDir('View/templates_c');
    $this->assign('root',root);
    }
    }

?>