<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<link href="css/home.css" rel="stylesheet">
<link href="css/cart.css" rel="stylesheet">

<main class="container  " style="margin-left: 10%; margin-right: 10%;">
    <h1 class="text-center ">My cart</h1>
    <div class="  container">


        <div class="container my-5">
            <div class="row table-product">
                <table class="table  text-center">
                    <thead class="">
                        <tr class="text-success">
                            <th scope="col">Stt</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Số lượng sản phẩm</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Xóa sản phẩm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        $sumProduct = 0;
                        foreach ($carts as $index => $item) {

                            echo '<tr class="align-middle">
            <th scope="row">' . $index + 1 . '</th>
            <td class=""> <a href="/detail?masp=' . $item->id_products . '""><img src="img/';
                            if ($item->id_category == "L01") {
                                echo 'cream-lipstick/' . $item->image . '" width="100px" ></a>';
                            } elseif ($item->id_category == "L02") {
                                echo 'matte-lipsick/' . $item->image . '" width="100px" height="65%"></a>';
                            } else echo 'Gloss Lipstick/' . $item->image . '" width="100px" height="65%"></a>';
                            $total = $total + $item['price'] * $item['number'];
                            $sumProduct += $item['number'];
                            echo '</td>
            <td>' . $item['name_products'] . '</td>
            <td><input type="number" style="width:70px;" value = "' . $item['number'] . '" /></td>
            <td>' . number_format($item['price'] * $item['number'], 0, '.', ',')  . ' VNĐ</td>
            <td><a href="/deleteCart?masp=' . $item['id_products'] . '">
            <button type="button" class="btn btn-danger text-light"><i class="fas fa-trash-alt"></i></button></a></td>
        </tr>

        ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="row  justify-content-center mt-5">
                <div class="col-sm-8 col-md-10 col-lg-5">
                    <h5 class="text-center fw-bold  py-3">Chi tiết</h5>
                    <div class="row my-3 text-right">
                        <p class="col-8 fw-bold">Tổng số lượng</p>
                        <div class="col-4"><?= $sumProduct ?></div>
                    </div>
                    <div class="row my-2">
                        <p class="col-8 fw-bold">Tổng tiền</p>
                        <div class="col-4"><?= number_format($total, 0, '.', ',') ?> VNĐ</div>
                    </div>
                    <div class="row mb-5">
                        <button class="btn-checkout  bg-success text-light p-2" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Đặt hàng</button>


                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ĐẶT HÀNG</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form method="post" action="/pay">
                                    <input type="hidden" name="total" value="<?= $total ?>">
                                    <div class="modal-body">
                                        <div class="form-group mb-4">
                                            <label for="address" class="form-label">Address :</label>
                                            <input type="text" class="form-control py-2" id="address"
                                                placeholder="ENTER ADDRESS" name="address" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">CONFIRM</button>
                                        <button t ype="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">CANCEL</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

</main>



<?php $this->stop() ?>