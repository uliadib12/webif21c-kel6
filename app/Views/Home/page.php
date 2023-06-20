<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/css/profile.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbarb">
        <div class="container">
            <div class="logo">
                <a href="#" class="btn" onclick="goBack()"><i class="fa fa-arrow-left"></i></a>
                <a class="navbar-brand" data-placement="bottom"></a>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('/uploads/images/<?= $event['gambar_banner'] ?>')"></div>
            <div class="container">
                <div class="content" style="display: flex; justify-content: center; align-items: center">
                    <div class="user-description">
                        <h3 class="title" style="padding-top: 0px"><?= $event['nama'] ?></h3>
                        <!-- <p class="kt">Capture The Flag</p> -->
                    </div>
                </div>
                <div class="content">
                    <div class="social-description">
                        <p>
                        <?= $event['keterangan'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daftar Event -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Daftar Event</h3>
                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <ul class="list-group">
                        <?php foreach ($kategori as $key => $value) : ?>
                            <li id="button-kategori" class="list-group-item" data-toggle="modal" data-target="#eventModal1" data-index=<?= $key ?>  ><?= $value['kategori'] ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Modal Event 1 -->
        <div class="modal fade" id="eventModal1" tabindex="-1" role="dialog" aria-labelledby="eventModal1Label"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="eventModal1Label">Nama Event</h3>
                    </div>
                    <div class="modal-body">
                        <form class="eprofil" action="/daftarLomba/" method="post">
                            <div class="epchild">
                                <input type="hidden" name="id_kategori" value="<?= $event['id_event'] ?>" />
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" id="username"
                                        value="<?= esc($user->username) ?>" readonly required />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        value="<?= esc($user->email) ?>" readonly require />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <input type="submit" class="btn btn-success" value="Daftar" />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Konten deskripsi -->

    <!-- Tautan skrip JavaScript -->
    <script>
        let kategori = <?= json_encode($kategori) ?>;
    </script>
    <script>
    function goBack() {
        window.history.back();
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <script>
        $('#button-kategori').on('click', function() {
            let index = $(this).data('index');
            $('#eventModal1Label').html(kategori[index].kategori);
            
            // chage path form action
            let form = $('.eprofil');
            let action = form.attr('action');
            form.attr('action', action + kategori[index]['id']);
        });
    </script>
</body>

</html>