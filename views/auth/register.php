<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link rel="stylesheet" href="css/login.css">
<main>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-4">
            <!-- <p class="text-center mb-4 content_signin">Create my account</p> -->
            <h1 class="text-center p-2 ">Create account</h1>
            <form id="signupForm" name="signupForm" method="post" class="form-vertical" action="/register">
                <div class="form-group ">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control " id="email" placeholder="Enter your email" name="email">
                </div>
                <div class="row ">
                    <div class="form-group">
                        <label for="username" class="form-label">Name:</label>
                        <input type="text" class="form-control " id="username" placeholder="Enter your your name"
                            name="username">
                    </div>
                    <div class="form-group ">
                        <label for="phone" class="form-label">Phone Number:</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter your your phone"
                            name="phone">
                    </div>
                </div>
                <div class="form-group  passw">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control " id="pwd" placeholder="Enter your your password"
                        name="pwd">

                </div>

                <div class="form-group  passw1">
                    <label for="cpwd" class="form-label">Confirm Password:</label>
                    <input type="password" class="form-control " id="cpwd" placeholder="Enter your your password again"
                        name=" cpwd">

                </div>
                <!-- <div class="form-group form-check mb-4">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" required> I
                    agree
                    with the terms and conditions of L.PERFUME.
                </label>
            </div> -->
                <?php if (isset($errors)) {
                    foreach ($errors as $err) {
                        echo '<p class="text-danger fw-bold">' . $err . '</p>';
                    }
                } ?>

                <!-- <button type="submit" name="btn_submit" class="btn btn-dark col-12 btn_submit py-2 mb-4">Create my
                profile</button> -->

                <div class="form-group">
                    <div class="form-btn">
                        <!-- <a class=" btn btn-create  " type="submit" href="/register"> Create</a> -->
                        <button type="submit" class=" btn btn-create  ">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</main>

<script type="text/javascript">
$(document).ready(function() {
    $('.close1').on('click', function() {
        $('#multiCollapseExample1').hide();
    })
    $('.close2').on('click', function() {
        $('#multiCollapseExample2').hide();
    })
    $('.search').on('click', function() {
        $('#multiCollapseExample1').show();
    })
    $('.bag').on('click', function() {
        $('#multiCollapseExample2').show();
    })

    $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $('.backtop').fadeIn();
        } else {
            $('.backtop').fadeOut();
        }
    });
    $('.backtop').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 100);
    });

    $('.eye_close').on('click', function() {
        $('.eye_open').show();
        $('.eye_close').hide();
        $('#pwd').attr('type', 'text');
    });

    $('.eye_open').on('click', function() {
        $('.eye_open').hide();
        $('.eye_close').show();
        $('#pwd').attr('type', 'password');
    });

});
</script>


<?php $this->stop() ?>