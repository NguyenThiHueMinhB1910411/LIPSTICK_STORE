<header>
    <div>
        <div class="pre-nav row text-center pre-nav m-0 " style="padding-top: 15px;">
            <div class="col-3">

            </div>
            <h1 class="col-6 text-center ">HM-Lipstick</h1>
            <!-- <p class="row"></p> -->
            <div class="col-3 d-flex justify-content-end pe-5 pt-6">
                <a class="cart-icon pe-4" href="/cart"><i class="  fas fa-shopping-cart "></i></a>

                <?php if (App\SessionGuard::isUserLoggedIn()) : ?>
                <div class="">
                    <div class=" justify-content-end">
                        <?= App\SessionGuard::users()['email'] ?>
                        |
                        <a href="/logout" class="text-danger fw-bold">
                            Sign Out
                        </a>
                    </div>
                </div>
                <?php else : ?>
                <div class="col-sm-12 col-md-5 col-lg-3 user-login">
                    <div class="">
                        <a class="user-icon " href="/login"><i class="  fas fa-user "></i></a>
                    </div>

                </div>

                <?php endif; ?>

            </div>
        </div>




        <nav class="navbar navbar-expand-lg navbar-dark  row   " aria-label="Eighth navbar example">
            <div class=" ">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarsExample07">

                    <ul class="  navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light " aria-current="page" href="/home"
                                style="font-weight: bolder;">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active text-light" href="/about" style="font-weight: bolder;">About
                            </a>

                        </li>

                        <li class="nav-item dropdown ">
                            <a class="nav-link active dropdown-toggle text-light" href="#" id="dropdown07"
                                data-bs-toggle="dropdown" aria-expanded="false"
                                style="font-weight: bolder;">Products</a>
                            <ul class="dropdown-menu" aria-labelledby="">
                                <li><a class="dropdown-item" href="/all">all</a></li>
                                <li><a class="dropdown-item" href="/cream">Cream Lipstick </a></li>
                                <li><a class="dropdown-item" href="/matte">Matte Lipstick</a></li>
                                <li><a class="dropdown-item" href="/gloss">Gloss Lipstick</a></li>

                            </ul>
                        </li>
                        <?php if (!App\SessionGuard::isUserLoggedIn()) : ?>
                        <li class="nav-item">
                            <a class="nav-link active text-light" href="login" style="font-weight: bolder;">Login</a>
                        </li>
                        <?php else : ?>
                        <!-- start dang xuat -->
                        <li>
                            <a class="nav-link active text-light fw-bold " href="/login">

                            </a>
                        </li>
                        <?php endif ?>
                        <!-- stop dang xuat -->
                    </ul>
                    <form role="search" method="POST" class="search-form" action="/search" name="search-form">
                        <label>
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" value=""
                                name="search">
                        </label>
                    </form>
                </div>
            </div>
        </nav>
</header>