<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>
<link href="css/login.css" rel="stylesheet">

<main class="">
    <div class="container col-5  p-2">
        <h1 class="text-center p-2 ">Login</h1>


        <form class="   offset-1 " role="form" action="/login" method="POST">


            <div class="form-group<?= isset($errors['name']) ? ' has-error' : '' ?>">
                <label for="name" class="col-md-4 control-label">Name </label>
                <div class="">
                    <input id="name" type="text" class="form-control" name="name" placeholder="Enter your name"
                        value="<?= isset($old['name']) ? $this->e($old['name']) : '' ?>" required autofocus>

                    <?php if (isset($errors['name'])) : ?>
                    <span class="help-block">
                        <strong><?= $this->e($errors['name']) ?></strong>
                    </span>
                    <?php endif ?>
                </div>
            </div>

            <div class="form-group<?= isset($errors['email']) ? ' has-error' : '' ?>">
                <label for="email" class="col-md-4 control-label">E-Mail: </label>
                <div class="">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Enter your e-mail"
                        value="<?= isset($old['email']) ? $this->e($old['email']) : '' ?>" required>

                    <?php if (isset($errors['email'])) : ?>
                    <span class="help-block">
                        <strong><?= $this->e($errors['email']) ?></strong>
                    </span>
                    <?php endif ?>
                </div>
            </div>

            <div class="form-group <?= isset($errors['password']) ? 'has-error' : '' ?>">
                <label for="password" class="col-md-4 control-label">Password</label>
                <div class="">
                    <input id="password" type="password" class="form-control" name="password"
                        placeholder="Enter your password" required>

                    <?php if (isset($errors['password'])) : ?>
                    <span class="help-block">
                        <strong><?= $this->e($errors['password']) ?></strong>
                    </span>
                    <?php endif ?>
                </div>
                <div>
                    <p><a class="forgot-password" href="#">Forgot password?</a></p>
                </div>
            </div>
            <div class="form-group">
                <div class="form-btn">
                    <a class=" btn btn-signin  " type="submit" href="/login"> Sign in(view)</a>

                </div>
                <div class="form-btn">
                    <a class="btn btn-create_account" href="/register">Create an account</a>
                </div>
            </div>
        </form>
    </div>


</main>
<?php $this->stop() ?>