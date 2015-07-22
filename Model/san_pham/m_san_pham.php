<?php
class m_san_pham extends Database
{
    public function danh_sach_san_pham(){
        $this->setQuery('select * from san_pham');
        return $this->loadAllRow();
    }
    public function san_pham_theo_ma($ma)
    {
        $this->setQuery('select * from san_pham where Ma_San_Pham=?');
        return $this->loadAllRow([$ma]);
    }
        public function san_pham_theo_loai($loai)
    {
        $this->setQuery('select * from san_pham where Ma_Loai=?');
        return $this->loadAllRow([$loai]);
    }
        public function san_pham_cung_loai($loai,$id)
    {
        $this->setQuery('select * from san_pham where Ma_Loai=? and Ma_San_Pham!=?');
        return $this->loadAllRow([$loai,$id]);
    }
        public function san_pham_moi()
        {
            $this->setQuery('select * from san_pham where san_pham_moi=1');
        return $this->loadAllRow();
        }
    public function san_pham_ban_chay()
    {
        $this->setQuery("SELECT `san_pham`.`ma_san_pham`, `ten_san_pham`, `ten_san_pham_url`, `ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `ct_hoa_don`.`don_gia`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`, sum(`so_luong`) as TSL 
                        FROM `san_pham` 
                        inner join `ct_hoa_don` 
                        on  `san_pham`.`ma_san_pham` = `ct_hoa_don`.`ma_san_pham`
                        Group by `san_pham`.`ma_san_pham`
                        Order By sum(`so_luong`) desc
                        Limit 0,10");
        return $this->loadAllRow();
    }
    public function tim_san_pham($ten)
    {
        $chuoi='%'.$ten.'%';
        $this->setQuery("select * from san_pham where ten_san_pham like ?");
        return $this->loadAllRow(array($chuoi));
    }
    public function them_san_pham($data)
    {
        $this->setQuery('insert into san_pham(`ten_san_pham`, `ten_san_pham_url`, `ma_loai`, `mo_ta_tom_tat`, 
`mo_ta_chi_tiet`, `don_gia`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`) values(?,?,?,?,?,?,?,?,?,?,?)');
        $this->execute(array($data['ten_san_pham'], $data['ten_san_pham_url'], $data['ma_loai'], $data['mo_ta_tom_tat'], 
$data['mo_ta_chi_tiet'], $data['don_gia'], $data['hinh'], $data['san_pham_moi'], $data['so_lan_xem'], $data['ngay_tao']));
    }
    public function cap_nhat_san_pham($data)
    {
        $this->setQuery('update san_pham set `ten_san_pham`=?, `ten_san_pham_url`=?, `ma_loai`=?, `mo_ta_tom_tat`=?, 
`mo_ta_chi_tiet`=?, `don_gia`=?, `hinh`=?, `san_pham_moi`=?, `so_lan_xem`=?, `ngay_tao`=? where ma_san_pham=?');
        $this->execute(array($data['ten_san_pham'], $data['ten_san_pham_url'], $data['ma_loai'], $data['mo_ta_tom_tat'], 
$data['mo_ta_chi_tiet'], $data['don_gia'], $data['hinh'], $data['san_pham_moi'], $data['so_lan_xem'], $data['ngay_tao'],$data['ma_san_pham']));
    }
}


?>