{extends file="index.tpl"}
{block name="content"}
<div class="container">
    <div class="content-top">
        <h1>HÀNG MỚI & SALE</h1>
        <div class="grid-in">
            {for $i=0 to 2}
            <div class="col-md-4 grid-top">
                <a href="san-pham/danh-sach-san-pham.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{root}/images/logo{$i+1}.jpg" alt="">
                    <div class="b-wrapper">
                        <h3 class="b-animate b-from-left    b-delay03 ">
                            <span>{$chu_thich_1[$i]->Chu_thich1}</span>
                        </h3>
                    </div>
                </a>


                <p><a href="san-pham/danh-sach-san-pham.html">{$chu_thich_2[$i]->Chu_thich2}</a></p>
            </div>
            {/for}
            <div class="clearfix"> </div>
        </div>
        <div class="grid-in">
            {for $i=3 to 5}
                <div class="col-md-4 grid-top">
                    <a href="san-pham/danh-sach-san-pham.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="{root}/images/logo{$i+1}.jpg" alt="">
                        <div class="b-wrapper">
                            <h3 class="b-animate b-from-left    b-delay03 ">
                                <span>{$chu_thich_1[$i]->Chu_thich1}</span>
                            </h3>
                        </div>
                    </a>
                    <p><a href="san-pham/danh-sach-san-pham.html">{$chu_thich_2[$i]->Chu_thich2}</a></p>
                </div>
            {/for}
            <div class="clearfix"> </div>
        </div>
    </div>
    <!----->

    <div class="content-top-bottom">
        <h2>BÁN CHẠY</h2>
        <div class="col-md-6 men">
            <a href="san-pham/danh-sach-san-pham.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t1.jpg" alt="">
                <div class="b-wrapper">
                    <h3 class="b-animate b-from-top top-in   b-delay03 ">
                        <span>MORE INFO</span>
                    </h3>
                </div>
            </a>


        </div>
        <div class="col-md-6">
            <div class="col-md1 ">
                <a href="san-pham/danh-sach-san-pham.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t2.jpg" alt="">
                    <div class="b-wrapper">
                        <h3 class="b-animate b-from-top top-in1   b-delay03 ">
                            <span>MORE INFO</span>
                        </h3>
                    </div>
                </a>

            </div>
            <div class="col-md2">
                <div class="col-md-6 men1">
                    <a href="san-pham/danh-sach-san-pham.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t3.jpg" alt="">
                        <div class="b-wrapper">
                            <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                                <span>MORE INFO</span>
                            </h3>
                        </div>
                    </a>

                </div>
                <div class="col-md-6 men2">
                    <a href="san-pham/danh-sach-san-pham.html" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t4.jpg" alt="">
                        <div class="b-wrapper">
                            <h3 class="b-animate b-from-top top-in2   b-delay03 ">
                                <span>MORE INFO</span>
                            </h3>
                        </div>
                    </a>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="content-bottom">
    <h2>LOGO CÁC NHÃN HÀNG</h2>
    <ul>
        <li><a href="#"><img class="img-responsive" src="images/lo.png" alt=""></a></li>
        <li><a href="#"><img class="img-responsive" src="images/lo1.png" alt=""></a></li>
        <li><a href="#"><img class="img-responsive" src="images/lo2.png" alt=""></a></li>
        <li><a href="#"><img class="img-responsive" src="images/lo3.png" alt=""></a></li>
        <li><a href="#"><img class="img-responsive" src="images/lo4.png" alt=""></a></li>
        <li><a href="#"><img class="img-responsive" src="images/lo5.png" alt=""></a></li>
        <div class="clearfix"> </div>
    </ul>

</div>
{/block}