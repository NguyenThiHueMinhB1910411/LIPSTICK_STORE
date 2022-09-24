<?php $this->layout("admin/index", ["title" => APPNAME]) ?>
<?php $this->start("page") ?>
<link href="css/custom1.css" rel="stylesheet">

<div class="container">
    <div class=" border my-3 py-3 text-center fw-bold fs-5 ">
        KẾT QUẢ DOANH THU THEO NĂM
    </div>
    <div class=" row tong-hop mt-4 p-0">
        <div class="col-3">
            <div class="card bg-white shadow-sm mx-auto">
                <div class="row">
                    <div class="col-3">
                        <i
                            class="fas fa-money-bill fs-1 border border-3 border-warning text-warning px-3 py-2 my-4 ms-3 rounded-circle"></i>
                    </div>
                    <div class="col-9 fw-bold">
                        <p class="mt-3 ms-4">LỢI NHUẬN</p>
                        <p class="ms-5 fs-3">10M</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-white shadow-sm mx-auto">
                <div class="row">
                    <div class="col-3">
                        <i
                            class="fab fa-product-hunt fs-1 border border-3 border-success text-success px-3 py-2 my-4 ms-3 rounded-circle"></i>
                    </div>
                    <div class="col-9 fw-bold">
                        <p class="mt-3 ms-4">SẢN PHẨM</p>
                        <p class="ms-5 fs-3">27</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-white shadow-sm mx-auto">
                <div class="row">
                    <div class="col-3">
                        <i
                            class="fas fa-file-invoice-dollar fs-1 border border-3 border-primary text-primary px-3 py-2 my-4 ms-3 rounded-circle"></i>
                    </div>
                    <div class="col-9 fw-bold">
                        <p class="mt-3 ms-4">HÓA ĐƠN</p>
                        <p class="ms-5 fs-3">20K</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card bg-white shadow-sm mx-auto">
                <div class="row">
                    <div class="col-3">
                        <i
                            class="fas fa-dollar-sign fs-1 border border-3 border-danger text-danger px-2 py-2 my-4 ms-3 rounded-circle"></i>
                    </div>
                    <div class="col-9 fw-bold">
                        <p class="mt-3 ms-4">KHÁCH HÀNG</p>
                        <p class="ms-5 fs-3">70K</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row san-pham mt-4">
        <div class="thong-ke">
            <h3 class="fw-bold text-dark text-center ">DANH SÁCH SẢN PHẨM TIÊU BIỂU
            </h3>
        </div>
        <table class="table table-light text-center">
            <thead class="">
                <tr class="text-success">
                    <th scope="col tex-tsuccess">STT</th>
                    <th scope="col">TÊN SẢN PHẨM</th>
                    <th scope="col">LOẠI SẢN PHẨM</th>
                    <th scope="col">SỐ LƯỢNG ĐƠN ĐẶT HÀNG</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row ">1</th>
                    <td>Rouge dark red</td>
                    <td>Cream Lipstick</td>
                    <td>27K</td>
                </tr>

                <tr>
                    <th scope="row">2</th>
                    <td>Rouge dior red</td>
                    <td>Cream Lipstick</td>
                    <td>32K</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Rouge drama dark orange</td>
                    <td>Cream Lipstick</td>
                    <td>12K</td>
                </tr>

                <tr>
                    <th scope="row">4</th>
                    <td>Matte dior orange</td>
                    <td>Matte lipstick</td>
                    <td>16K</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Rouge dreams limited edition</td>
                    <td>Matte Lipstick</td>
                    <td>20K</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>The slim matte lipstick red</td>
                    <td>Matte Lipstick</td>
                    <td>10K</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Dior tattoo dark red</td>
                    <td>Gloss Lipstick</td>
                    <td>8K</td>
                </tr>

                <tr>
                    <th scope="row">8</th>
                    <td>Dior addict gloss baby pink</td>
                    <td>Gloss Lipstick</td>
                    <td>30K</td>
                </tr>
                <tr">
                    <th scope="row">9</th>
                    <td>Dior addict gloss ultradior</td>
                    <td>Gloss Lipstick</td>
                    <td>16K</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Dior tattoo dusty rose</td>
                        <td>Gloss Lipstick</td>
                        <td>12K</td>
                    </tr>

            </tbody>
        </table>


    </div>

    <div class="follow my-4">
        <div class="row">
            <div class="col-4">
                <div class="card rounded">
                    <div class="social-graph-wrapper widget-facebook text-center py-3 rounded-top">
                        <span class="s-icon "><i class="fab fa-facebook-f fs-2 text-light"></i></span>
                    </div>
                    <div class="row fb">
                        <div class="col-6 border border-end">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center ">
                                <h4 class="m-1"><span class="counter">89</span> k</h4>
                                <p class="m-0">Friends</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                <h4 class="m-1"><span class="counter">119</span> k</h4>
                                <p class="m-0">Followers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card rounded">
                    <div class="social-graph-wrapper widget-google text-center py-3 rounded-top">
                        <span class="s-icon "><i class="fab fa-google-plus-g fs-2 text-light"></i></span>
                    </div>
                    <div class="row">
                        <div class="col-6 border border-end">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center card-body">
                                <h4 class="m-1"><span class="counter">89</span> k</h4>
                                <p class="m-0">Friends</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                <h4 class="m-1"><span class="counter">119</span> k</h4>
                                <p class="m-0">Followers</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-4">
                <div class="card rounded">
                    <div class="social-graph-wrapper widget-twitter text-center py-3 rounded-top">
                        <span class="s-icon "><i class="fab fa-twitter fs-2 text-light "></i></span>
                    </div>
                    <div class="row">
                        <div class="col-6 border border-end">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center card-body">
                                <h4 class="m-1"><span class="counter t">89</span> k</h4>
                                <p class="m-0">Friends</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                <h4 class="m-1"><span class="counter">119</span> k</h4>
                                <p class="m-0">Followers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $this->stop(); ?>