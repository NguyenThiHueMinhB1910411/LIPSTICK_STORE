<link href="css/aboutus.css" rel="stylesheet">
<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->start("page") ?>

<link rel="stylesheet" href="assets/css/detail.css">
<main>
    <div class="container mb-5">

        <div class="row detail pt-5 ">
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <img class="img-fluid" src="img\<?php if ($product->id_category == 'L01') {
                                                    echo "cream-lipstick";
                                                } elseif ($product->id_category == 'L02') {
                                                    echo "matte-lipstick";
                                                } else {
                                                    echo "Gloss Lipstick";
                                                }
                                                ?>\<?= $product->image ?>">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-sm-10 col-md-12 col-lg-4 pb-2 mt-5">
                <h1 class="pb-3 mb-3"><?= $Product->name_products ?></h1>
                <p><?= $Product->id_products ?></p>
                <hr>
                <!-- <p class="fw-bold">MÀU SẮC</p> -->
                <!-- <p><?= $product->mau_sac ?></p> -->
                <p class="fw-bold">GIÁ SẢN PHẨM</p>
                <p><?= number_format($Product->price, 0, '.', ',') ?> VNĐ</p>
                <p class="fw-bold">SỐ LƯỢNG</p>
                <form action="/addCart" method="POST">
                    <input type="number" value="1" min="1" max="20" name="so-luong">
                    <input class=" border border-dark add-cart col-12 py-2 mt-3" type="submit" name="addCart"
                        value="THÊM VÀO GIỎ HÀNG"></input>
                    <input type="hidden" name="id_products" value="<?= $products->id_products ?>">
                </form>

            </div>
        </div>

    </div>
</main>

<?php $this->stop() ?>

<?php $this->stop() ?>