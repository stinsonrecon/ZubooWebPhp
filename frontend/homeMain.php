<main class="consumer-site-main">
    <section class="home">
        <div class="slider">
            <div class="slide active" style="background-image: url('image/Home-background_2.png')">
                <div class="container"></div>
            </div>
            <div class="slide" style="background-image: url('image/Home-background.png')">
                <div class="container"></div>
            </div>
            <div class="slide" style="background-image: url('image/Home-background_3.png')">
                <div class="container">
                    <div class="caption">
                        <a href="">
                            <button class="home-slider-btn">Xem thêm</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- controls  -->
        <div class="controls">
            <i class="fa fa-angle-left prev" id="prev"></i>
            <i class="fa fa-angle-right next" id="next"></i>
        </div>

        <!-- indicators -->
        <div class="indicator">
        </div>

    </section>


    <script src="script/sliderJS.js"></script>
    <!--End of product wallpaper-->
    <div class="electric-bike-series-title-wraper">
        <h2 class="electric-bike-series-title">Các dòng xe điện</h3>
        <div class="electric-bike-series-title-line"></div>
    </div>

    <p><a href="electricBike.php" class="get-all-electric-bikes">Xem tất cả</a></p>

    <ul class="electric-series">
        <li>
            <a href="zSeriesDetail.php" class="electric-bike" style="text-decoration: none">
                <div class="hoverOnEbikeSeries">
<!--                    <h2>Xem thêm</h2>-->
                </div>
                <figure>
                    <img src="image/Z-Series.png">
                    <figcaption>Zuboo Z-Series</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="kSeriesDetail.php" class="electric-bike" style="text-decoration: none">
                <div class="hoverOnEbikeSeries">
<!--                    <h2>Xem thêm</h2>-->
                </div>
                <figure>
                    <img src="image/K-Series.png">
                    <figcaption>Zuboo K-Series</figcaption>
                </figure>
            </a>
        </li>
        <li>
            <a href="xSeriesDetail.php" class="electric-bike"  style="text-decoration: none">
                <div class="hoverOnEbikeSeries">
<!--                    <h2>Xem thêm</h2>-->
                </div>
                <figure>
                    <img src="image/X-Series.png">
                    <figcaption>Zuboo X-Series</figcaption>
                </figure>
            </a>
        </li>
    </ul>
    <!--End of electric bike series images-->
    <div class="bike-series-title-wraper">
        <h2 class="bike-series-title">Các dòng xe điện</h3>
        <div class="bike-series-title-line"></div>
    </div>
    <p><a href="bike.php" class="get-all-bikes">Xem tất cả</a></p>

    <div class="slider-container">
        <div class="slidershow middle">
            <div class="slides-bike">
                <input type="radio" name="r" id="r1" checked>
                <input type="radio" name="r" id="r2">
                <input type="radio" name="r" id="r3">
                <input type="radio" name="r" id="r4">
                <input type="radio" name="r" id="r5">

                <div class="slide-bike s1">
                    <figure>
                        <img src="image/bike-image.png" alt="product image"/>
                        <figcaption>Xe đạp trợ lực</figcaption>
                    </figure>
                </div>
                <div class="slide-bike">
                    <figure>
                        <img src="image/bike-image.png" alt="product image"/>
                        <figcaption>Xe đạp địa hình</figcaption>
                    </figure>
                </div>
                <div class="slide-bike">
                    <figure>
                        <img src="image/bike-image.png" alt="product image"/>
                        <figcaption>Xe đạp đường trường</figcaption>
                    </figure>
                </div>
                <div class="slide-bike">
                    <figure>
                        <img src="image/bike-image.png" alt="product image"/>
                        <figcaption>Xe đạp  thành phố</figcaption>
                    </figure>
                </div>
                <div class="slide-bike">
                    <figure>
                        <img src="image/bike-image.png" alt="product image"/>
                        <figcaption>Xe đạp trẻ em</figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="navigation-bike">
            <label for="r1" class="bar-bike"></label>
            <label for="r2" class="bar-bike"></label>
            <label for="r3" class="bar-bike"></label>
            <label for="r4" class="bar-bike"></label>
            <label for="r5" class="bar-bike"></label>
        </div>
    </div>

    <div class="exploreTechTitle">
        Công nghệ xe điện
    </div>
    <div class="techWraper">
        <ul class="tech-list">
            <li class="techItemWraper">
                <div class="techItem">
                    <img src="image/bikeTrending.png">
                    <div class="tech-content-wraper">
                        <h3>Xe đạp là xu thế</h3>
                        <a href="bikeTrending.php" style="text-decoration: none">
                            <button class="tech-detail-btn">
                            Xem thêm
                            </button>
                        </a>
                    </div>
                </div>
            </li>
            <li class="techItemWraper">
                <div class="techItem">
                    <img src="image/electricEngine.png">
                    <div class="tech-content-wraper">
                        <h3>Động cơ điện là tương lai</h3>
                        <a href="futureOfEngine.php" style="text-decoration: none">
                            <button class="tech-detail-btn">
                            Xem thêm
                            </button>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</main>