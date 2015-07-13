<script src="./js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<div  id="top" class="callbacks_container">
    <ul class="rslides" id="slider">
        <li>
            <div class="banner-text">
                <a href="#">  <img src="./images/banner1.jpg" alt="banner1"/> </a>
            </div>
        </li>
        <li>
            <div class="banner-text">
                <a href="#">   <img src="./images/banner2.jpg" alt="banner2"/> </a>
           </div>
        </li>
        <li>
            <div class="banner-text">
                <a href="#">   <img src="./images/banner3.jpg" alt="banner3"/> </a>
            </div>
        </li>
    </ul>
</div>