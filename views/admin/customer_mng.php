<?php $this->layout("admin/index", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<div class="container" style="min-height: 100vh;">

    <div class="row san-pham mt-4">
        <div class="thong-ke text-center mb-3">
            <h4 class="fw-bold">DANH SÁCH KHÁCH HÀNG </h4>
        </div>
        <div class="update mb-4">
            <button type="button" class="btn btn-outline-dark" id="update">Cập Nhật</button>
        </div>
        <table class="table table-light table-hover text-center">
            <thead>
                <tr class="text-success">
                    <th scope="col">STT</th>
                    <th scope="col">TÊN KHÁCH HÀNG</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">SỐ ĐIỆN THOẠI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($customer as $index => $csm) {
                    echo '<tr>
                        <th scope="row">' . ($index + 1) . '</th>
                        <td>' . $csm->username . '</td>
                        <td>' . $csm->email . '</td>
                        <td>' . $csm->phone . '</td>
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