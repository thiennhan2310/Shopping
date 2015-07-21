<?php
/**
 * Created by PhpStorm.
 * User: Thien Nhan
 * Date: 7/18/2015
 * Time: 1:35 PM
 */
$date=date('ymdHis');
include_once('../class/database.php');
$db=new Database();
$db->setQuery('select * from loai');
$loai=$db->loadAllRow();

$db->setQuery('select * from giam_gia');
$giam_gia=$db->loadAllRow();
?>

    <style>
        tr
        {
            height: 50px;
        }
    </style>
    <script>
        $('document').ready(function() {
            $("#giam_gia").change(function () {
                $value = $("#giam_gia :selected").text();
                if ($value == 'Khác') {
                    $('#thong_tin').prop('disabled', false);
                    $('#phan_tram').prop('disabled', false);
                    $('#start').prop('disabled', false);
                    $('#end').prop('disabled', false);
                }
                else {
                    $('#thong_tin').val('');
                    $('#phan_tram').val('');
                    $('#start').val('');
                    $('#end').val('');
                    $('#thong_tin').prop('disabled', true);
                    $('#phan_tram').prop('disabled', true);
                    $('#start').prop('disabled', true);
                    $('#end').prop('disabled', true);

                }
            });
        });
    </script>
<h2 align="center">THÊM SẢN PHẨM MỚI</h2>

<form  action="./shop-control-adm.php" method="post" enctype="multipart/form-data">
    <table align="center" cellpadding="10px" cellspacing="0px">
        <tr>
            <td>Mã Sản Phẩm</td>
            <td><input type="text"  name="ma_san_pham" value="<?php echo $date; ?>" readonly="readonly"</td>
        </tr>
        <tr>
            <td>Tên Sản Phẩm</td>
            <td><input type="text" placeholder="Tên sản phẩm" required="" title="Nhập tên sản phẩm" name="ten_san_pham"</td>
        </tr>
        <tr>
            <td>Loại Sản Phẩm</td>
            <td>
                <select name="loai_sp" id="loai_sp">
                    <?php
                        foreach($loai as $val) {
                           echo '<option value = "'.$val->Ma_Loai.'">'.$val->Ten_Loai.'</option >';
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giảm Giá: </td>
            <td>
                <select name="giam_gia" id="giam_gia">
                    <?php
                    foreach($giam_gia as $val) {
                        echo '<option value = "'.$val->Ma_Giam_Gia.'">'.$val->Thong_Tin.'</option >';
                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Hình Ảnh:</td>
            <td><input type="file" name="Hinh" required="" accept="image/jpeg" title="Thêm hình ảnh"/></td>
        </tr>
        <tr>
            <td>Giá:</td>
            <td><input type="number" name="gia" required="" title="Nhập giá sản phẩm"/></td>
        </tr>
        <tr>
            <td>Thông Tin:</td>
            <td><textarea name="thong_tin" required="" title="Thêm thông tin"></textarea></td>
        </tr>
        <tr >
            <td colspan="2" align="center"><input type="submit" name="Them" value="Thêm"/></td>
        </tr>
    </table>
</form>



