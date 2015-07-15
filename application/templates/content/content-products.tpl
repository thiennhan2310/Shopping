
<div class="container">
    <div class="col-md-3 product-price">
       {include file="aside.tpl"}
    <div class="col-md-9 product1">
        {for $i=0 to 8 step 3}
        <div class=" bottom-product"> {*tr*}
            {for $j=$i to 8 max=3}
                {if $ds[$j]->Hinh != ''}
            <div class="col-md-4 bottom-cd simpleCart_shelfItem"> {*td=3*}
                <div class="product-at ">
                    <a href="single.html"><img class="img-responsive" src="./image_products/{$ds[$j]->Hinh}" alt="">
                        <div class="pro-grid">
                            <span class="buy-in">BUY NOW</span>
                        </div>
                    </a>
                </div>
                <p class="tun">{$ds[$j]->Ten_sua}</p>
                <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
            </div>
                {/if}
            {/for}


            <div class="clearfix"> </div>
        </div>
        {/for}

    </div>
    <div class="clearfix"> </div>
    <nav class="in">
       <ul class="pagination">
        {*    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
            <li ><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li ><a href="#">2 <span class="sr-only"></span></a></li>
            <li><a href="#">3 <span class="sr-only"></span></a></li>
            <li><a href="#">4 <span class="sr-only"></span></a></li>
            <li><a href="#">5 <span class="sr-only"></span></a></li>
            <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>*}
            {$link_trang}
        </ul>

    </nav>
</div>
