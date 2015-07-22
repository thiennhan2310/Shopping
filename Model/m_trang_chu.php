<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/22/2015
 * Time: 10:35 AM
 */

class m_trang_chu extends Database {

    public function chu_thich_1()
    {
        $this->setQuery('select Chu_thich1 from trang_chu limit 3,6');
        return $this->loadAllRow();
    }
    public function chu_thich_2()
    {
        $this->setQuery('select Chu_thich2 from trang_chu limit 3,6');
        return $this->loadAllRow();
    }
}