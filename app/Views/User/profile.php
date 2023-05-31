<?php
helper('form');
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="/css/profile.css" />
  <link rel="stylesheet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
</head>

<body class="profile-page sidebar-collapse">
  <nav class="navbarb">
    <div class="container">
      <div class="logo">
        <a class="navbar-brand" data-placement="bottom" href="/"> Tekno Expo</a>
      </div>

      <div id="mainListDiv" class="main_list">
        <ul class="navlinks">
          <li><a href="#">User</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Challages</a></li>
          <li><a href="#">RankBoard</a></li>
          <li><a href="#">Help?</a></li>
        </ul>
      </div>

      <span class="navTrigger">
        <i></i>
        <i></i>
        <i></i>
      </span>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image: url('/images/bg.png')"></div>
      <div class="container">
        <div class="content" style="display: flex; justify-content: center; align-items: center;">
          <div class="user-description img-prf">
            <div class="photo-container">
              <img src="<?= isset($profilePicture) ? "/uploads/images/" . $profilePicture : "/images/default-profile-picture.jpg" ?>" alt="" />
            </div>
          </div>
          <div class="user-description">
            <h3 class="title" style="padding-top: 0px;"><?= esc($user->username)  ?></h3>
              <?php if (isset($profile) && count($profile) != 0) : ?>
                <?php if ($profile['jurusan'] != "" && $profile['kelas'] != "") : ?>
                  <p style="margin-right: 1rem; color: #ec5757">
                    <p class="category"><?= esc($profile['jurusan']) ?> / <span style="letter-spacing: normal"><?= esc($profile['kelas']) ?></span></p>
                  </p>
                <?php endif; ?>
              <?php endif; ?>
            <div class="inf">
              <?php if (isset($profile) && count($profile) != 0) : ?>
                <?php if ($profile['npm'] != "" && $profile['npm'] != "0") : ?>
                  <p style="margin-right: 1rem; color: #ec5757">
                    <?= esc($profile['npm']) ?>
                  </p>
                <?php endif; ?>
              <?php endif; ?>
              <p><?= esc($user->email) ?></p>
            </div>
            <!-- <p class="kt">Capture The Flag</p> -->
          </div>
        </div>
        <div class="content">
          <div class="social-description">
            <h2>#6</h2>
            <p>Rank</p>
          </div>
          <div class="social-description">
            <h2>1500</h2>
            <p>Points</p>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="nav-align-center">
              <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#task" role="tablist">
                    <i class="fa-solid fa-calendar-day"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" role="tablist">
                    <i class="fa-solid fa-house"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " data-toggle="tab" href="#settings" role="tablist">
                    <i class="fa-solid fa-gear"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="tab-content sp">
          <div class="tab-pane active" id="home" role="tabpanel">
            <div class="col-md-10 ml-auto mr-auto">
              <div class="row collections">
                <div class="col">
                  <div class="collections">
                    <div class="text-center">
                      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                      <h2>G-Charts</h2>
                      <h5>Grafik</h5>
                      <div id="bar-chart"></div>
                      <br />
                      <h5>Page Hits per Country</h5>
                      <div id="pie-chart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="task" role="tabpanel">
            <div class="col-md-10 ml-auto mr-auto">
              <div class="row collections">
                <div class="text-center">
                  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                  <h2>G-Charts</h2>
                  <h5>Perkembangan Live</h5>
                  <div id="line-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane " id="settings" role="tabpanel">
            <div class="col-md-10 ml-auto mr-auto">
              <div class="row collections">
                <div class="col">
                  <div class="profile">
                    <div class="image-container">
                      <?= form_open_multipart('/profile/update-profile-picture', ['id' => 'profilePictureForm']) ?>
                      <input type="file" id="file-input" name="profile_picture" id="fileInput" name="profile_picture" accept="image/*" onchange="sendProfilePicture()" style="display: none" />
                      <img id="preview-image" src="<?= isset($profilePicture) ? "/uploads/images/" . $profilePicture : "/images/default-profile-picture.jpg" ?>" alt="profile" />
                      <label for="file-input" title="Pilih Gambar" class="image-icon"><i class="fa-solid fa-pen-to-square"></i></label>
                      </form>
                    </div>
                    <?php if (isset($profile) && count($profile) == 0) : ?>
                      <div class="alert alert-warning" role="alert">
                        Please complete your profile
                      </div>
                    <?php endif; ?>
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
                    <ul class="nav nav-tabs" style="margin-bottom: 20px" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="user-tab" data-toggle="tab" href="#user" role="tab" aria-controls="user" aria-selected="true">Data User</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data
                          Profile</a>
                      </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">
                        <form class="eprofil" action="/profile/update-user" method="post">
                          <div class="epchild">
                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" class="form-control" name="username" id="username" value="<?= esc($user->username) ?>" required />
                            </div>
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" id="email" value="<?= esc($user->email) ?>" readonly require />
                            </div>
                            <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" name="password" id="password" />
                            </div>
                          </div>
                          <div class="epchild">
                            <div class="form-group">
                              <label for="new_password">New Password</label>
                              <input type="password" class="form-control" name="new_password" id="new_password" />
                            </div>
                            <div class="form-group">
                              <label for="confirm_new_password">Confirm
                                Password</label>
                              <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password" />
                            </div>
                            <div class="modal-footer">
                              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
                              <input type="submit" class="btn btn-success" value="Save" />
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form class="container" action="/profile/update-profile" method="post">
                          <div class="row">

                            <div class="col">
                              <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="<?= isset($profile['nama_lengkap']) ? esc($profile['nama_lengkap']) : '' ?>" />
                              </div>

                              <div class="form-group">
                                <label for="npm">NPM</label>
                                <input type="number" class="form-control" id="npm" name="npm" value="<?= isset($profile['npm']) ? ((($profile['npm'] ?? "") === "0" || ($profile['npm'] ?? "") == "" || ($profile['npm'] ?? "") == NULL) ? "" : (esc($profile['npm']) ?? "")) : '' ?>">
                              </div>

                              <div class="form-group">
                                <label for="kelas">Kelas</label>

                                <input type="text" class="form-control" name="kelas" id="kelas" value="<?= isset($profile['kelas']) ? esc($profile['kelas']) : '' ?>" />
                              </div>

                              <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                  <option <?= ((isset($profile['jenis_kelamin']) ? $profile['jenis_kelamin'] : "") == "Laki-Laki") ? "selected" : "" ?>>
                                    Laki-Laki</option>
                                  <option <?= ((isset($profile['jenis_kelamin']) ? $profile['jenis_kelamin'] : "") == "Perempuan") ? "selected" : "" ?>>
                                    Perempuan</option>
                                </select>
                              </div>
                            </div>

                            <div class="col">
                              <div class="form-group">
                                <label for="fakultas">Fakultas</label>
                                <select class="form-control" id="fakultas" name="fakultas">
                                  <option <?= ((isset($profile['fakultas']) ? $profile['fakultas'] : "") == "Fakultas Teknik dan Ilmu Komputer") ? "selected" : "" ?>>
                                    Fakultas Teknik dan Ilmu Komputer</option>
                                  <option <?= ((isset($profile['fakultas']) ? $profile['fakultas'] : "") == "Fakultas Ekonomi dan Bisnis") ? "selected" : "" ?>>
                                    Fakultas Ekonomi dan Bisnis</option>
                                  <option <?= ((isset($profile['fakultas']) ? $profile['fakultas'] : "") == "Fakultas Ilmu Kesehatan") ? "selected" : "" ?>>
                                    Fakultas Sastra dan Ilmu Pendidikan</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                  <option <?= ((isset($profile['jurusan']) ? $profile['jurusan'] : "") == "Teknik Informatika") ? "selected" : "" ?>>
                                    Informatika</option>
                                  <option <?= ((isset($profile['jurusan']) ? $profile['jurusan'] : "") == "Sistem Informasi") ? "selected" : "" ?>>
                                    Sistem Informasi</option>
                                  <option <?= ((isset($profile['jurusan']) ? $profile['jurusan'] : "") == "Manajemen") ? "selected" : "" ?>>
                                    Teknik Sipil</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= isset($profile['alamat']) ? $profile['alamat'] : "" ?>" />
                              </div>

                              <div class="form-group">
                                <label for="no_hp">Nomor Telepon</label>
                                <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?= isset($profile['no_hp']) ? $profile['no_hp'] : "" ?>">
                              </div>
                            </div>

                          </div>

                          <div class="row">
                            <div class="modal-footer col">
                              <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
                              <input type="submit" class="btn btn-success" value="Save" />
                            </div>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    var profile = <?= json_encode($profile) ?>;
  </script>
  <script src="/js/chart.js"></script>
  <script>
    function sendProfilePicture() {
      let profilePictureForm = document.getElementById('profilePictureForm');
      profilePictureForm.submit();
    }
  </script>
  <script>
    $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $('.navbarb').addClass('affix');
        console.log('OK');
      } else {
        $('.navbarb').removeClass('affix');
      }
    });

    //   hamburger
    $('.navTrigger').click(function() {
      $(this).toggleClass('active');
      console.log('Clicked menu');
      $('#mainListDiv').toggleClass('show_list');
      $('#mainListDiv').fadeIn();
    });
  </script>
  <!-- Jquery needed -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
  </script>
  <script src="/js/profile.js"></script>
</body>