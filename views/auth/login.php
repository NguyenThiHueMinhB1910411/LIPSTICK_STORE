<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link href="css/login.css" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-4">
            <h1 class="text-center p-2 ">Log in</h1>

            <form id="signinForm" method="post" class="form-horizontal" action="/login">
                </button>
                <?php
                    if (isset($errors)) {
                        foreach ($errors as $err) {
                            echo "<p class='text-danger fw-bold'>" . $err . "</p>";
                        }
                    }
                    ?>


                <div class="form-group">
                    <label for="email" class="col-md-4 control-label">E-Mail: </label>
                    <div class="">
                        <input id="email" type="email" class="form-control" name="email" placeholder="Enter your e-mail"
                            name="email" required>
                    </div>
                    <div class="form-group mb-4 passw">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control py-2" id="password" placeholder="Enter your pasword"
                            name="password" required>
                    </div>
                </div>
                <div>
                    <p><a class="forgot-password" href="#">Forgot password?</a></p>
                </div>

                <div class="form-group">
                    <div class="form-btn">
                        <button type="submit" class="btn btn-signin">Login</button>
                    </div>
                    <div class="form-btn">
                        <a class="btn btn-create_account" href="/register">Create an account</a>
                    </div>
                </div>

                <!-- <button type="submit" class="btn btn-dark col-12 btn_submit py-2 mb-4">Sign in</button>
                    <button type="button" class="btn btn-dark col-12 btn_create py-2 mb-4"><a href="/register">Create my
                            account</a></button> -->
            </form>
        </div>
    </div>
</div>
</main>


<script type="text/javascript">

</script>

<?php $this->stop() ?>