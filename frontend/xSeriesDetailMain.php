<?php
    include_once 'backend/xSeriesHandle.php';
?>

<style>
    <?php 
        echo ':root{ --primary: '.$colour_list[0]["colour_value"].'; }';
        for($i = 0; $i < $result_size; $i++){
            echo '.gradient[color="'.$colour_list[$i]["colour"].'"]{ background-image: linear-gradient(45deg, '.$colour_list[$i]["colour_value"].', '.$colour_list[$i]["gradient"].'); }';
        }
        for($i = 0; $i < $result_size; $i++){
            echo '.color[color="'.$colour_list[$i]["colour"].'"]{
                        background-color: '.$colour_list[$i]["colour_value"].';
                        border-color: '.$colour_list[$i]["colour_value"].';
                    }';
        }
    ?>
    select {
        -webkit-appearance:none;
        -moz-appearance:none;
        -ms-appearance:none;
        appearance:none;
        outline:0;
        box-shadow:none;
        border:0!important;
        background: #5c6664;
        background-image: none;
        flex: 1;
        padding: 0 .5em;
        color:#fff;
        cursor:pointer;
        font-size: 1em;
    }
    #model{
        width: 100%;
        height: 100%;
    }
    select::-ms-expand {
       display: none;
    }
    .size-container {
        margin-bottom: 10px;
        position: relative;
        display: flex;
        width: 20em;
        height: 3em;
        line-height: 3;
        background: #5c6664;
        overflow: hidden;
        border-radius: .25em;
        margin-top: 2%;
    }
    .sizes::after {
       content: '\25BC';
       position: absolute;
       top: 0;
       right: 0;
       padding: 0 1em;
       background: #2b2e2e;
       cursor:pointer;
       pointer-events:none;
       transition:.25s all ease;
    }
    .sizes:hover::after {
       color: #F2B11B;
    }
</style>

<main class="consumer-site-main">
    <div class="banner">
        <img src="image/ebike-front.png">
        <h1 class="electricHeading">Xe điện</h1>
    </div>
    <div class="product-card-container">
            <div class="card">
                <div class="productBackground">
                    <div class="gradients">
                        <?php
                            echo '<div class="gradient second" color="'.$colour_list[0]["colour"].'"></div>';
                            for($i = 1; $i < $result_size; $i++){
                                echo '<div class="gradient" color="'.$colour_list[$i]["colour"].'"></div>';
                            }
                        ?>
                    </div>
                    <h1 class="zuboo">zuboo</h1>
                    <img src="image/logoZuboo.svg" alt="" class="product-detail-logo">
                    <?php 
                        echo '<img src="image/xSeries/'.$colour_list[0]["image_path"].'" alt="" class="product show" color="'.$colour_list[0]["colour"].'">';
                        for($i = 1; $i < $result_size; $i++){
                            echo '<img src="image/xSeries/'.$colour_list[$i]["image_path"].'" alt="" class="product" color="'.$colour_list[$i]["colour"].'">';
                        }
                    ?>

                </div>
                <div class="product-info">
                    <div class="product-name">
                        <div>
                            <h1 class="big">
                                <?php
                                    echo $colour_list[0]["class_name"];
                                ?>
                            </h1>
                            <span class="new">
                                <?php
                                    echo $colour_list[0]["type_name"];
                                ?>
                            </span>
                        </div>
                        <h3 class="small">
                            <?php
                                echo $colour_list[0]["sub-title"];
                            ?>
                        </h3>
                    </div>
                    <div class="product-content">
                        <h3 class="title">Thông tin sản phẩm</h3>
                        <p class="product-content-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    </div>
                    <div class="size-container">
                        <form action="xSeriesDetail.php" class="sizes">
                            <select name="model" id="model"  onchange="this.form.submit()">
                                <option selected disabled>Chọn mẫu xe</option>
                                <?php
                                    for($i = 0; $i < $modelSize; $i++){
                                        echo '<option value="'.$modelList[$i].'">'.$modelList[$i].'</option>';
                                    }
                                ?>
                            </select>
                        </form>
                    </div>
                    <div class="color-container">
                        <h3 class="title">Chọn màu</h3>
                        <div class="colors">
                            <?php
                                echo '<span class="color active" primary="'.$colour_list[0]["colour_value"].'" color="'.$colour_list[0]["colour"].'"></span>';
                                for($i = 1; $i < $result_size; $i++){
                                    echo '<span class="color" primary="'.$colour_list[$i]["colour_value"].'" color="'.$colour_list[$i]["colour"].'"></span>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="product-properties-wraper">
            <div class="product-left">
                <div class="other-product-container">
                    <ul class="other-product-list">
                        <?php
                            for($i = 0; $i < $partImgSize; $i++){
                                echo '<li class="other-product"><a class="other-product-link-img" href="image/'.$partImgList[$i].'"><img src="image/'.$partImgList[$i].'"></a></li>';
                            }
                        ?>
                    </ul>
                    <div class="imgBox">
                        <img src="image/redEbike.png" alt="">
                    </div>
                    <p class="imgBoxText">Chi tiết sản phẩm</p>
                </div>
                <script src="script/thumbnailImg.js"></script>
            </div>
            <div class="product-right">
                <h3>Thông số kỹ thuật</h3>
                <h4>Khung xe</h4>
                <div class="line"></div>
                <table class="chassis-detail">
                    <tr>
                        <td>
                            <div class="chassis-detail-title">Dài-Rộng-Cao</div>
                            <div class="chassis-detail-content">
                                <?php
                                    echo $inforList[0]["len_wid_hei"];
                                ?>
                            </div>
                        </td>
                        <td>
                            <div class="chassis-detail-title">Chiều dài cơ sở</div>
                            <div class="chassis-detail-content">
                                <?php
                                    echo $inforList[0]["basic_len"];
                                ?>
                             </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="chassis-detail-title">Độ cao gầm</div>
                            <div class="chassis-detail-content">
                                <?php
                                        echo $inforList[0]["ground_clearance"];
                                    ?>
                            </div>
                        </td>
                        <td>
                            <div class="chassis-detail-title">Trọng lượng xe</div>
                            <div class="chassis-detail-content">
                                <?php
                                    echo $inforList[0]["weight"];
                                ?>
                            </div>
                        </td>
                    </tr>
                </table>
                <h4>Động cơ</h4>
                <div class="line"></div>
                <table class="engine-detail">
                    <tr>
                        <td>
                            <div class="engine-detail-title">Quãng đường</div>
                            <div class="engine-detail-content">
                                <?php
                                    echo $inforList[0]["distance"];
                                ?>
                            </div>
                        </td>
                        <td>
                            <div class="engine-detail-title">Vận tốc lớn nhất</div>
                            <div class="engine-detail-content">
                                <?php
                                    echo $inforList[0]["speed"];
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="engine-detail-title">Thời gian sạc</div>
                        <div class="engine-detail-content">
                            <?php
                                    echo $inforList[0]["charging"];
                                ?>
                        </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <h3 class="technology-title">Công nghệ xe điện</h3>

        <div class="tech-list-wraper">
            <ul class="tech-list">
                <li class="techItemWraper">
                    <div class="techItem">
                        <img src="image/zubooBattery.png">
                        <div class="tech-content-wraper">
                            <h3>Ắc quy Zuboo mạnh như thế nào</h3>
                            <a href="bikeTrending.html" style="text-decoration: none">
                                <button class="tech-detail-btn">Xem thêm</button>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="techItemWraper">
                    <div class="techItem">
                        <img src="image/electricEngine.png">
                        <div class="tech-content-wraper">
                            <h3>Động cơ điện là tương lai</h3>
                            <a href="bikeTrending.html" style="text-decoration: none">
                                <button class="tech-detail-btn">Xem thêm</button>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div> 
        <div class="other-product-title">Các dòng sản phẩm khác</div>
        <div class="other-product-slider-container">
            <div class="other-product-slidershow other-product-middle">
                <div class="other-product-slides">
                    <input type="radio" name="op-r" id="op-r1" checked>
                    <input type="radio" name="op-r" id="op-r2">
                    <input type="radio" name="op-r" id="op-r3">

                    <div class="other-product-slide op-s1">
                        <figure>
                             <img src="image/redEbike.png" alt="product image"/>
                             <figcaption>Z Series</figcaption>
                        </figure>
                    </div>
                    <div class="other-product-slide">
                        <figure>
                             <img src="image/redEbike.png" alt="product image"/>
                             <figcaption>S Series</figcaption>
                        </figure>
                    </div>
                    <div class="other-product-slide">
                        <figure>
                             <img src="image/redEbike.png" alt="product image"/>
                             <figcaption>X Series</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="other-product-navigation">
                <label for="op-r1" class="other-product-bar"></label>
                <label for="op-r2" class="other-product-bar"></label>
                <label for="op-r3" class="other-product-bar"></label>
            </div>
        </div>
    <script>
        const sizes = document.querySelectorAll('.size');
        const colors = document.querySelectorAll('.color');
        const products = document.querySelectorAll('.product');
        const gradients = document.querySelectorAll('.gradient');
        const productBg = document.querySelector('.productBackground');

        let prevColor = "<?php echo $colour_list[0]["colour"]?>";
        let animationEnd = true;

        function changeColor(){
            if(!animationEnd) return;
            let primary = this.getAttribute('primary');
            let color = this.getAttribute('color');
            let product = document.querySelector(`.product[color="${color}"]`);
            let gradient = document.querySelector(`.gradient[color="${color}"]`);
            let prevGradient = document.querySelector(`.gradient[color="${prevColor}"]`);

            if(color == prevColor) return;

            colors.forEach(c => c.classList.remove('active'));
            this.classList.add('active');

            document.documentElement.style.setProperty('--primary', primary);

            products.forEach(s => s.classList.remove('show'));
            product.classList.add('show');

            gradients.forEach(g => g.classList.remove('first', 'second'));
            gradient.classList.add('first');
            prevGradient.classList.add('second');

            prevColor = color;
            animationEnd = false;

            gradient.addEventListener('animationend', () => {
                animationEnd = true;
            })
        }

        sizes.forEach(size => size.addEventListener('click', changeModel));
        colors.forEach(c => c.addEventListener('click', changeColor));

        let x = window.matchMedia("(max-width: 1000px)");

        function changeHeight(){
            if(x.matches){
                let productHeight = products[0].offsetHeight;
                productBg.style.height = `${productHeight * 0.9}px`;
            }
            else{
                productBg.style.height = "475px";
            }
        }

        changeHeight();

        window.addEventListener('resize', changeHeight);
    </script>
</main>