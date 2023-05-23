<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.register') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>

<div id="bg">
    <nav>
        <div class="navbar-brand"><a href="#">TEKNO EXPO</a></div>
        <div class="navbar-icons">
            <a href="#"><i class="fas fa-times"></i></a>
        </div>
    </nav>
    <div id="regist" class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="login-page">

                    <?php if (session('error') !== null) : ?>
                        <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                    <?php elseif (session('errors') !== null) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php if (is_array(session('errors'))) : ?>
                                <?php foreach (session('errors') as $error) : ?>
                                    <?= $error ?>
                                    <br>
                                <?php endforeach ?>
                            <?php else : ?>
                                <?= session('errors') ?>
                            <?php endif ?>
                        </div>
                    <?php endif ?>
                    <div class="form">
                        <form class="login-form" action="<?= url_to('register') ?>" method="post">
                            <?= csrf_field() ?>
                            <h1>Sign Up</h1>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" autocomplete="email" value="<?= old('email') ?>" required />
                            <label for="text">Username</label>
                            <input type="text" name="username" id="text" autocomplete="username" value="<?= old('username') ?>" required />
                            <label for="password">Kata Sandi</label>
                            <input type="password" name="password" id="password" autocomplete="new-password" required />
                            <label for="password">Ulangi Kata Sandi</label>
                            <input type="password" name="password_confirm" id="text" autocomplete="new-password" required />
                            <input type="submit"></input>
                            <p class="text-center"><?= lang('Auth.haveAccount') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.login') ?></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>