<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link href="css/custom1.css" rel="stylesheet">
<link href="css/home.css" rel="stylesheet">

<main class="">
    <!--section-1  -->
    <section class="home-thumbnail ">
        <img class="mt-0 " src="img/thumnail/dior-thumbnail-1.webp" alt="" width="100%">
    </section>
    <!-- <section class="section-3">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
            <div class="row vid">
                <video autoplay muted loop src="vid/intro-2.mp4" width="600px " height="450px"></video>

                <script>
                document.querySelector('video').playbackRate = 0.8;
                </script>
            </div>
            <div class="col img align-items-sm-center">
                3CE is the popular Korean cosmetics brands of Style Nanda and the brand (3 Concept Eyes) is one of the
                youngest and most fun brands on the block, dealing in nail polish, eye makeup products and more. One
                look at their incredible line of products and you
                will be floored! Go from morning to evening in an instant and simply touch up to look flawless all day.
                With their range of Cosmetic products in modern colours
            </div>
        </div>
    </section> -->

    <section>
        <div>
            <video autoplay muted loop src="vid/vid-2.mp4" width="auto " style="max-width: 100%;"></video>
        </div>
    </section>
    <!-- section-4 -->
    <!-- <section class="section-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">
            <div class="col img align-items-sm-center ">
                3CE is the popular Korean cosmetics brands of Style Nanda and the brand (3 Concept Eyes) is one of the
                youngest and most fun brands on the block, dealing in nail polish, eye makeup products and more. One
                look at their incredible line of products and you
                will be floored! Go from morning to evening in an instant and simply touch up to look flawless all day.
                With their range of Cosmetic products in modern colours, you can achieve the look you want. From priming
                to dolling up and perfecting
                your skin, the range of 3CE in Singapore can help you accomplish it
            </div>
            <img class="col " src="img/thumnail/dior-5.webp" alt="">
        </div>

    </section> -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img\thumnail\carousel-1.1.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img\thumnail\carousel-1.2.webp" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img\thumnail\carousel-1.3.webp" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="container-fluid">
        <h2 class="text-center">What's new</h2>
        <div>
            <ul class="row  row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 list-unstyled">
                <li class="col p-2 mt-4 mb-4 ">
                    <a href="/cream"> <img class="img-fluid" src="img\cream-lipstick\dior-2.webp"></a>

                </li>
                <li class="col p-2 mt-4 mb-4">
                    <a href="/matte"><img class="img-fluid" src="img\matte-lipstick\dior-0.jpg"></a>

                </li>
                <li class="col p-2 mt-4 mb-4">
                    <a href="/gloss"><img class="img-fluid" src="img\Gloss Lipstick\dior-1.webp"></a>

                </li>
                <li class="col p-2 mt-4 mb-4">
                    <a href="/matte"><img class="img-fluid" src="img\matte-lipstick\dior-1.jpg"></a>

                </li>
            </ul>
            </ul>
        </div>
    </section>
    <!-- ////// advertise////// -->
    <section class="container-fluid advertise">
        <h2 class="text-center" style="margin-bottom: 2%;">Best seller</h2>
        <div class=" row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
            <div class="col">
                <div class="card img-fluid" style="width:100%">
                    <img class="card-img-top" src="img\cream-lipstick\dior-3.webp" alt="Card image" style="width:100%">
                    <div class="card-img-overlay">
                        <h3 class="card-title fw-bold fs-large">Lipstick</h3>
                        <p class="card-text">Cream dior </p>
                        <a href="/all" class="btn btn-light">See more</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card img-fluid" style="width:100%">
                    <img class="card-img-top" src="img/Moisturizing Lipstick/dior-2.webp" alt="Card image"
                        style="width:100%">
                    <div class="card-img-overlay">
                        <h3 class="card-title fw-bold">Lipstick</h3>
                        <p class="card-text">Lipstick dior moisturizing</p>
                        <a href="/all" class="btn btn-light">See more</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card img-fluid" style="width:100%">
                    <img class="card-img-top" src="img\Gloss Lipstick\dior-3.webp" alt="Card image" style="width:100% ">
                    <div class="card-img-overlay">
                        <h3 class="card-title fw-bold">Lipstick</h3>
                        <p class="card-text">Gloss lipstick</p>
                        <a href="/all" class="btn btn-light">See more</a>
                    </div>
                </div>
            </div>
    </section>



</main>





<?php $this->stop() ?>