<?php $this->layout("admin/index", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container" style="min-height: 100vh;">

    <div class="row san-pham mt-4">
        <div class="thong-ke text-center mb-3">
            <h4 class="fw-bold">DANH SÁCH SẢN PHẨM</h4>
        </div>
        <div class="row justify-content-start">
            <!-- <div class="col-3">
                <button type="button" class="btn btn-outline-dark  " id="">Chỉnh sửa sản phẩm</button>
            </div> -->
            <div class="col-3">

                <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Thêm sản
                    phẩm</button>



                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm mới</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form method="post" action="/add_product">
                                <input type="hidden" name="total" value="<?= $total ?>">
                                <div class="modal-body">
                                    <div class="form-group mb-4">
                                        <label for="" class="form-label">Mã sản phẩm :</label>
                                        <input type="text" class="form-control py-2" name="id_products"
                                            placeholder="Nhập mã sản phẩm" required>

                                        <label for="" class="form-label">Mã loại sản phẩm :</label>
                                        <select class="form-select" name="id_category" id="">
                                            <option value="L01">Cream lipstick</option>
                                            <option value="L02">Matte lipstick</option>
                                            <option value="L03">Gloss lipstick</option>
                                        </select>

                                        <label for="" class="form-label">Tên sản phẩm :</label>
                                        <input type="text" class="form-control py-2" name="name_products"
                                            placeholder="Nhập tên sản phẩm" name="" required>

                                        <label for="" class="form-label">Giá sản phẩm :</label>
                                        <input type="text" class="form-control py-2" name="price"
                                            placeholder="Nhập giá sản phẩm" name="" required>

                                        <input type="file" id="myFile" name="filename">

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Thêm</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Modal -->

            </div>
            <div class="col-1">
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-outline-dark justify-content-end col row " id="update"> <i
                        class="fas fa-filter"></i></button>
            </div>
        </div>

    </div>



    <table class="table  table-hover table-light text-center mt-2">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">TÊN SẢN PHẨM</th>
                <th scope="col">HÌNH ẢNH</th>
                <th scope="col">LOẠI SẢN PHẨM</th>
                <th scope="col">GIÁ SẢN PHẨM</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($Product as $index => $product) {
                echo '<tr>
                        <th scope="row">' . ($index + 1) . '</th>
                        <td class="">' . $product->name_products . '</td>
                        <td class="px-0 w-25"><img class="m-0" width="100px" src="img/';
                if ($product->id_category == 'L01') {
                    echo "cream-lipstick/";
                } elseif ($product->id_category == 'L02') {
                    echo "matte-lipstick/";
                } else {
                    echo "Gloss Lipstick/";
                }
                echo $product->image . '"/></td>
                        <td>' . $product->id_category . '</td>
                        <td>' . number_format($product->price, 0, '.', ',') . ' VNĐ</td>
                        <td>
                     
            <i class="fas fa-edit" data-bs-toggle="modal" data-bs-target="#' . $product->id_products . '"></i>

                        <a href="/delete_product?masp=' . $product->id_products . '"><i class="fas fa-trash-alt text-danger"></i></a>
                        </td>
                </tr>';
            } ?>


        </tbody>


        <!--  -->


        <!--  -->


        <?php foreach ($Product as $product) : ?>
        <div class="modal fade" id="<?= $product->id_products ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cập nhật sản phẩm</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="/edit_product">
                        <div class="modal-body">
                            <div class="form-group mb-4">
                                <label for="" class="form-label">Mã sản phẩm :</label>
                                <input type="text" class="form-control py-2" name="id_products"
                                    value="<?= $product->id_products ?>" placeholder="Nhập mã sản phẩm" disabled>
                                <input type="hidden" class="form-control py-2" name="id_products"
                                    value="<?= $product->id_products ?>" placeholder="Nhập mã sản phẩm">

                                <label for="" class="form-label">Mã loại sản phẩm :</label>
                                <select class="form-select" name="id_category" id="">
                                    <option value="<?= $product->id_category ?>"><?= $product->id_category ?></option>
                                    <option value="L01">L01</option>
                                    <option value="L02">L02</option>
                                    <option value="L03">L03</option>
                                </select>

                                <label for="" class="form-label">Tên sản phẩm :</label>
                                <input type="text" class="form-control py-2" name="name_products"
                                    value="<?= $product->name_products ?>" placeholder="Nhập tên sản phẩm" name=""
                                    required>

                                <label for="" class="form-label">Giá sản phẩm :</label>
                                <input type="text" class="form-control py-2" name="price" value="<?= $product->price ?>"
                                    placeholder="Nhập giá sản phẩm" name="" required>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Thêm</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
    </table>


</div>

</div>

<script>
$(document).ready(function() {
    $('#update').click(function() {
        window.location.reload();
    });
});
</script>

<?php $this->stop(); ?>