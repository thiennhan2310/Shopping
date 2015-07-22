{literal}
    <script>
        $('document').ready(function(){
           var $text='';
            $('#file').change(function(){
                $text= $('#file').val();

            });
            $('form#update').bind('submit',function(){
                $.ajax({
                    type		: "POST",
                    cache	: false,
                    url		: "./admin/update_info.php",
                    data		: $(this).serializeArray(),
                    success: function(data)
                    {
                        $.fancybox(data);
                    }
                });
                    if($text=='')
                    {
                        return false;
                     }
                    else
                    {
                        return true;
                    }


            });
        });
    </script>
{/literal}
<h2 align="center">THÔNG TIN SẢN PHẨM {if isset($result)}{$result}{/if}</h2>
<form id="update" action="./admin/update_info.php" method="post" enctype="multipart/form-data">
    <table align="center" cellpadding="10px" cellspacing="0px" width="450px" height="400px">
        <tr>
            <td>Mã Sản Phẩm</td>
            <td><input type="text"  name="ma_san_pham" value="{$danh_sach[0]->Ma_San_Pham}" readonly="readonly"</td>
        </tr>
        <tr>
            <td>Tên Sản Phẩm</td>
            <td><input type="text" value="{$danh_sach[0]->Ten_San_Pham}" required="" title="Nhập tên sản phẩm" name="ten_san_pham_new"</td>
        </tr>
        <tr>
            <td>Loại Sản Phẩm</td>
            <td>
                <select name="loai_sp" id="loai_sp">

                    {foreach $loai as $val}
                        {if $val->Ten_Loai==$danh_sach[0]->Loai}
                  <option selected="" value = "{$val->Ma_Loai}">{$val->Ten_Loai}</option >
                  {else}
                   <option  value = "{$val->Ma_Loai}">{$val->Ten_Loai}</option >
                        {/if}
                    {/foreach}
                </select>
            </td>
        </tr>
        <tr>
            <td>Giảm Giá: </td>
            <td>
                <select name="giam_gia" id="giam_gia">

                    {foreach $giam_gia as $val}
                        {if $val->Thong_Tin==$danh_sach[0]->giam_gia}
                            <option selected value = "{$val->Ma_Giam_Gia}">{$val->Thong_Tin}</option >
                        {else}
                        <option value = "{$val->Ma_Giam_Gia}">{$val->Thong_Tin}</option >
                        {/if}
                    {/foreach}
                </select>
            </td>
        </tr>

        <tr>
            <td><img src="./products/{$danh_sach[0]->Hinh}" width="110px"/>
                <input type="hidden" name="hinh_cu"  id="hinh_cu" value="{$danh_sach[0]->Hinh}" />
            </td>
            <td>
                <input type="file" id="file" name="Hinh" accept="image/jpeg" title="Thêm hình ảnh"/>
            </td>
        </tr>
        <tr>
            <td>Giá:</td>
            <td><input type="number" name="gia" value="{$danh_sach[0]->Gia}" required="" title="Nhập giá sản phẩm"/></td>
        </tr>
        <tr>
            <td>Thông Tin: <img src=""/></td>
            <td><textarea name="thong_tin" required="" title="Thêm thông tin">{$danh_sach[0]->Thong_Tin}</textarea></td>
        </tr>
        <tr >
            <td colspan="2" align="center"><input type="submit" name="CapNhat" value="Cập Nhật"/></td>
        </tr>
    </table>
</form>
