<link href="css/aboutus.css" rel="stylesheet">
<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link href="css/home.css" rel="stylesheet">
<link href="css/products.css" rel="stylesheet">
<main>

    <h2 class="text-center ">Tất cả sản phẩm</h2>
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



    <!-- //////chuyen trang //////// -->

    <section>

        <div class="container mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="/cream">1</a></li>
                <li class="page-item"><a class="page-link" href="/matte">2</a></li>
                <li class="page-item"><a class="page-link" href="/gloss">3</a></li>
            </ul>

        </div>
    </section>


</main>

<?php $this->stop() ?>