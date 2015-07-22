{extends file="cart.tpl"}
{block name="content"}
<style>

</style>
<div class="check"><form action="{root}/index.php?site=gio-hang" method="post">
    <h1>GIỎ HÀNG <button type="submit" style="background-color: #EF5F21;margin-left: 57%;font-family: 'Lato', sans-serif;font-size: 1em;"
                         class="btn btn-warning">Cập nhật</button></h1>
    <div class="col-md-9 cart-items">
        {$i=1}
        {foreach $gio_hang as $sp}

        <script>$(document).ready(function(c) {
                $('#close{$i}').on('click', function(c){
                    $('#cart{$i}').fadeOut('slow', function(c){
                        $('#cart{$i}').remove();
                    });
                });
            });
        </script>
        <div class="cart-header" id="cart{$i}">
            <div class="close1" id="close{$i}"> </div>
            <div class="cart-sec simpleCart_shelfItem">
                <div class="cart-item cyc">
                    <img src="{root}/products/{$sp->Hinh}" class="img-responsive" alt=""/>
                </div>
                <div class="cart-item-info">
                    <h3><a href="#">{$sp->Ten_San_Pham}</a><span>Mã Sản Phẩm: {$sp->Ma_San_Pham}</span></h3>


                    <ul class="qty">
                        <li><p>Số lượng : <input type="number" style="width: 50px" value="1" min="1" name="so_luong{$i}"/></p></li>
                        <input type="hidden" name="ma_sp" value="{$sp->Ma_San_Pham}"/>
                        <li><p>Đơn Giá:{number_format($sp->Gia)}  VNĐ</p></li>
                    </ul>
                    </form>
                    {*<div class="delivery">
                        <p>Service Charges : Rs.100.00</p>
                        <span>Delivered in 2-3 bussiness days</span>
                        <div class="clearfix"></div>
                    </div>*}
                </div>
                <div class="clearfix"></div>

            </div>
        </div>

          {$i=$i+1}
        {/foreach}
    </div>
    <div class="col-md-3 cart-total">
        <a class="continue" href="#">TIẾP TỤC MUA THÊM</a>
        <div class="price-details">
            <h3>CHI TIẾT HÓA ĐƠN</h3>
            <span>Tiền Hàng</span>
            <span class="total1">0</span>
            <span>Discount</span>
            <span class="total1">---</span>
            <span>Phí Ship</span>
            <span class="total1">30.000 </span>
            <div class="clearfix"></div>
        </div>
        <ul class="total_price">
            <li class="last_price"> <h4>Tổng Cộng</h4></li>
            <li class="last_price"><span>0</span> VNĐ</li>
            <div class="clearfix"> </div>
        </ul>


        <div class="clearfix"></div>
        <a class="order" href="{root}/don-hang/xac-nhan.html">XÁC NHẬN GIỎ HÀNG</a>
        {*<div class="total-item">
            <h3>OPTIONS</h3>
            <h4>COUPONS</h4>
            <a class="cpns" href="#">Apply Coupons</a>
            <p><a href="#">Log In</a> to use accounts - linked coupons</p>
        </div>*}
    </div>

    <div class="clearfix"> </div>
</div>
{/block}