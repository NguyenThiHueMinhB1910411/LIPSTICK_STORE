<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<link rel="stylesheet" href="css/product.css">
<main class="container">
    <?php
    echo '<h4 class="ps-5 my-5">Kết quả tìm kiếm từ khóa "' . $_POST['search'] . '": </h4>';
    echo '<div class="row m-0">';
    foreach ($result as $rs) {
        echo
        '
        <div class="col-sm-6 col-md-6 col-lg-4">
        <a href="/detail_products?masp=' . $rs->id_products . '""><img src="img/';
        if ($rs->id_category == "L01") {
            echo 'cream-lipstick/' . $rs->image . '" width="100%"  height="80%"></a>';
        } else if ($rs->id_category == "L02") {
            echo 'matte-lipstick/' . $rs->image . '" width="100%" height="80%"></a>';
        } else  echo 'Gloss Lipstick/' . $rs->image . '" width="100%" height="80%"></a>';
        echo '<p class="fw-bold mt-2">' . $rs->name_products . '</p>
      </div>';
    }
    ?>

</main>
<?php $this->stop() ?>