<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/responsive.css" />
    <link rel="stylesheet" href="/css/login.css" />
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login User</title>
</head>
<?php if (isset($user) == NULL) : ?>
<div id="bg">
    <nav>
        <div class="navbar-brand"><a href="#">TEKNO EXPO</a></div>
        <div class="navbar-icons">
            <a href="#"><i class="fas fa-times"></i></a>
        </div>
    </nav>
    <div id="login" class="contact_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="login-page">
                    <!-- Error Handle -->
                    <?php if (session('error') !== null) : ?>
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
                    <!-- Error Handle -->
                    <div class="form">
                        <form class="login-form" action="/login-v1" method="post">
                            <h1>Masuk</h1>
                            <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" required />
                            <label for="password">Kata Sandi</label>
                            <input type="password" name="password" id="password" required />
                            <input type="submit" value="Masuk" />
                            <p class="text-center">Belum Memiliki akun? <a href="/register">Buat Akun</a></p>
                            <div class="social-icons">
                                <a href="#"><img src="/images/logo-uti.png" width="90" /></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif ?>