<link href="css/aboutus.css" rel="stylesheet">
<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link href="css/custom1.css" rel="stylesheet">
<link href="css/products.css" rel="stylesheet">
<main>
    <!-- Thumbnail -->
    <!-- <section class="p-0 ">
        <img class="thumbnail" src="img/thumnail/lancome-1.webp" alt="" width="100%">

    </section> -->



    <h2 class="text-center ">Gloss lipstick</h2>
    <section class="container-fluid">
        <div>
            <ul class="row  row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 list-unstyled">
                <?php foreach ($products as $product) { ?>
                <div class="item">
                    <div class="col p-2 mt-4 mb-4 ">
                        <li>
                            <a href="/detail_products?masp=<?= $product->id_products ?>"> <img class=" img-fluid"
                                    src="img\<?php if ($product->id_category == 'L01') {

                                                                                                                                    echo "cream-lipstick";
                                                                                                                                } elseif ($product->id_category == 'L02') {
                                                                                                                                    echo "matte-lipstick";
                                                                                                                                } else {
                                                                                                                                    echo "Gloss Lipstick";
                                                                                                                                }
                                                                                                                                ?>\<?= $product->image ?>"></a>

                        </li>
                    </div>
                    <div class="text-center">
                        <h5><?= $product->name_products  ?></h5>
                        <p><?= $product->price ?></p>
                        <a href="/addcart?id=<?= $product->id_products ?>" class="btn shop_now">Thêm vào giỏ hàng</a>
                    </div>
                </div>
                <?php } ?>

            </ul>
        </div>
    </section>
    <!--  -->
    <section class="section-4">
        <h2 class="text-center">What's new</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <div class="container col   ">
                <img src="img/Gloss Lipstick/dior-3.webp" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                    <p>Click to see more information</p>
                    <div class="text "><a href="#" class="btn click_me">Click me</a></div>
                </div>

            </div>
            <div class="container col">
                <img src="img/Gloss Lipstick/dior-3.webp" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                    <p>Click to see more information</p>
                    <div class="text "><a href="#" class="btn click_me">Click me</a></div>
                </div>
            </div>
        </div>
    </section>



    <!-- //////chuyen trang //////// -->

    <section>

        <div class="container mt-5">
            <ul class="pagination justify-content-center">
                <!-- <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li> -->
                <li class="page-item"><a class="page-link" href="/matte">back</a></li>
                <li class="page-item"><a class="page-link" href="/cream">1</a></li>
                <!-- <li class="page-item"><a class="page-link" href="gloss.html">3</a></li>
        <li class="page-item"><a class="page-link" href="moisturizing.html">4</a></li> -->
                <li class="page-item"><a class="page-link" href="/matte">2</a></li>
            </ul>

        </div>
    </section>


</main>

<?php $this->stop() ?>