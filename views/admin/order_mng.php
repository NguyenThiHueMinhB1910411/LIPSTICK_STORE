<?php $this->layout("admin/index", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container" style="min-height: 100vh;">

    <div class="row san-pham mt-4">
        <div class="thong-ke text-center mb-3">
            <h4 class="fw-bold">DANH SÁCH ĐƠN HÀNG </h4>
        </div>
        <div class="update mb-4">
            <button type="button" class="btn btn-outline-dark" id="update">Cập Nhật</button>
        </div>
        <table class="table table-light text-center">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">THỜI GIAN ĐẶT HÀNG</th>
                    <th scope="col">TỔNG TIỀN</th>
                    <th scope="col">ĐỊA CHỈ</th>
                    <th scope="col">TRẠNG THÁI ĐƠN HÀNG</th>
                    <th scope="col">TRẠNG THÁI THANH TOÁN</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($receipt as $index => $rct) {
                    echo '<tr>
                    <th scope="row">' . ($index + 1) . '</th>
                    <td>' . $rct->date_create_receipt . '</td>
                    <td class="fw-bold text-primary">' . number_format($rct->total, 0, '.', ',')  . ' VNĐ</td>
                    <td>' . $rct->address . '</td>';
                   if($rct->status_receipt == 'Đang xác nhận')
                   echo '
                   <td><span class="bg-warning text-light rounded-pill px-3 py-1 ">' . $rct->status_receipt . '</span></td>
                   <td><span class="bg-danger text-light rounded-pill px-3 py-1">' . $rct->stastus_payment . '</span></td>
                    <td>
                    <a href="/accept?id='.$rct->id_receipt.'"><i class="fas fa-check text-success me-1 "></i></a>
                    <a href="/cancel?id='.$rct->id_receipt.'"> <i class="fas fa-ban text-danger "></i></a>
                    </td>';
                    else if($rct->status_receipt == 'Đã xác nhận')
                    echo '
                    <td><span class="bg-success text-light rounded-pill px-3 py-1">' . $rct->status_receipt . '</span></td>
                    <td><span class="bg-danger text-light rounded-pill px-3 py-1">' . $rct->stastus_payment . '</span></td>
                    <td>';
                    else
                    echo '
                    <td><span class="bg-danger text-light  rounded-pill px-3 py-1">' . $rct->status_receipt . '</span></td>
                    <td><span class="bg-danger text-light rounded-pill   px-3 py-1">' . $rct->stastus_payment . '</span></td>
                    <td>';
                   echo '
                    </tr>';
                }
                ?>


            </tbody>
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