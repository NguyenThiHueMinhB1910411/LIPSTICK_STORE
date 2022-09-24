<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>
<?php $this->start("page") ?>

<link rel="stylesheet" href="css/product.css">
<style>

</style>
<main>
    <div style="margin-left: 10%; margin-right: 10%;" class="container mb-5  ">


        <div class="row detail pt-5  ">
            <div class="col-sm-12 col-md-12 col-lg-6 text-center">
                <img width="100%" src="img\<?php if ($product->id_category == 'L01') {
                                                echo "cream-lipstick";
                                            } elseif ($product->id_category == 'L02') {
                                                echo "matte-lipstick";
                                            } else {
                                                echo "Gloss Lipstick";
                                            }
                                            ?>\<?= $product->image ?>"></a>
            </div>




            <div class="col-lg-1 "></div>
            <div class="col-sm-10 col-md-12 col-lg-4 pb-2 mt-5">
                <h1 class="font-weight-bold text-success"><?= $product->name_products ?></h1>

                <p class=" fw-bold">GIÁ SẢN PHẨM</p>
                <p><?= number_format($product->price, 0, '.', ',') ?> VNĐ</p>
                <p class="fw-bold">SỐ LƯỢNG</p>
                <form action="/addcart" method="POST">
                    <input type="number" value="1" min="1" max="20" name="number">
                    <input class=" border border-dark bg-light add-cart col-12 py-2 mt-3" type="submit" name="addcart"
                        value="THÊM VÀO GIỎ HÀNG"></input>
                    <input type="hidden" name="masp" value="<?= $product->id_products ?>">
                </form>

            </div>
        </div>

    </div>
</main>

<?php $this->stop() ?>