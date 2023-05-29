<?php
helper('form');
?>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/v.css" />
    <link rel="stylesheet" href="/css/tabel.css" />
    <link rel="stylesheet" href="/css/keterangan.css" />
</head>

<div class="profile">
    <img class="img-fluid" width="200" src="<?= isset($profilePicture) ? "/uploads/images/".$profilePicture : "/images/default-profile-picture.jpg" ?>" alt="profile" />
   
    <div style="margin-bottom: 10px; padding-left: 80px ;text-align: center;">
        <?= form_open_multipart('/profile/update-profile-picture', ['id' => 'profilePictureForm']) ?>
            <input type="file" id="fileInput" name="profile_picture" accept="image/*" onchange="sendProfilePicture()">
        </form>
    </div>

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

    <ul class="nav nav-tabs" style="margin-bottom: 20px;" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="user-tab" data-toggle="tab" href="#user" role="tab" aria-controls="user" aria-selected="true">Data User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data Profile</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">
            <form action="/profile/update-user" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="<?= $user->username ?>" required />

                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= $user->email ?>" readonly require />
                <hr/>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />

                <label for="new_password">New Password</label>
                <input type="password" name="new_password" id="new_password" />

                <label for="confirm_new_password">Confirm Password</label>
                <input type="password" name="confirm_new_password" id="confirm_new_password" />

                <input type="submit" value="Save Changes" />
            </form>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <form action="/profile/update-profile" method="post">
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?= $profile['nama_lengkap'] ?? "" ?>" />
                </div>

                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="number" class="form-control" id="npm" name="npm" value="<?= (($profile['npm'] ?? "") === "0" || ($profile['npm'] ?? "") == "" || ($profile['npm'] ?? "") == NULL) ? "" : ($profile['npm'] ?? "")?>">
                </div>

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <input type="text" name="kelas" id="kelas" value="<?= $profile['kelas'] ?? "" ?>" />
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option <?= (($profile['jenis_kelamin'] ?? "") == "Laki-Laki") ? "selected" : "" ?> >Laki-Laki</option>
                        <option <?= (($profile['jenis_kelamin'] ?? "") == "Perempuan") ? "selected" : "" ?> >Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fakultas">Fakultas</label>
                    <select class="form-control" id="fakultas" name="fakultas">
                        <option <?= (($profile['fakultas'] ?? "" ) == "Fakultas Teknik dan Ilmu Komputer") ? "selected" : "" ?> >Fakultas Teknik dan Ilmu Komputer</option>
                        <option <?= (($profile['fakultas'] ?? "" ) == "Fakultas Ekonomi dan Bisnis") ? "selected" : "" ?> >Fakultas Ekonomi dan Bisnis</option>
                        <option <?= (($profile['fakultas'] ?? "" ) == "Fakultas Sastra dan Ilmu Pendidikan") ? "selected" : "" ?> >Fakultas Sastra dan Ilmu Pendidikan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option <?= (($profile['jurusan'] ?? "" ) == "Informatika") ? "selected" : "" ?> >Informatika</option>
                        <option <?= (($profile['jurusan'] ?? "" ) == "Sistem Informasi") ? "selected" : "" ?> >Sistem Informasi</option>
                        <option <?= (($profile['jurusan'] ?? "" ) == "Teknik Sipil") ? "selected" : "" ?> >Teknik Sipil</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="<?= $profile['alamat'] ?? "" ?>" />
                </div>

                <div class="form-group">
                    <label for="no_hp">Nomor Telepon</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?= $profile['no_hp'] ?? "" ?>">
                </div>

                <div class="form-group">
                    <div style="margin-bottom: 20px;"></div>
                    <input type="submit" value="Save Changes" />
                </div>
            </form>
        </div>
    </div>

    <div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Event Story</h2>
                </div>
                <div class="col-sm-6">
                    
                    <a href="#deleteEmployeeModal" class="btn btn-del" data-toggle="modal"><i class="fa-solid fa-trash"></i>
                        <span>Delete</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>

                    </th>
                    <th>Event</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                            <label for="checkbox1"></label>
                        </span>
                    </td>
                    <td>Expo</td>
                    <td>16-06-22</td>
                    <td>
                    <a href="#addEmployeeModal" data-toggle="modal"><i class="btn"></i>
                        <span>detail</span></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content" style="width: auto;">
        <div class="event-details">
    <h2>EXPO</h2>
    <img class="img-fluid" width="200" src=" /images/AlbertEinstein.jpg" alt="profile" />
    <p>Date: 16-06-22</p>
    <p>Location: GSG</p>
    <p>Description: Tekno Expo adalah acara tahunan yang diselenggarakan
         oleh Himpunan Mahasiswa Fakultas Teknik dan ilmu Komputer (FTIK) Universitas Teknokrat Indonesia.
          Terdiri atas empat kategori, yaitu Desain Web, Pemrograman Game, UI/UX, dan CTF.</p>

    <a class="download-btn" href="/path/to/certificate.pdf" download>Download Certificate</a>
</div>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content" style="width: auto;">
            <form id="deleteForm" action="delete_data.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="deleteId" id="deleteId" />
                    <p>Data yang dipilih akan terhapus, hapus data?</p>
                    <p class="text-warning"><small>Tampilkan data yang dipilih!</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
                    <input type="submit" class="btn btn-danger" value="Delete" />
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/tabel/datamitra.js"></script>

<script>
    function sendProfilePicture(){
        let profilePictureForm = document.getElementById('profilePictureForm');
        profilePictureForm.submit();
    }
</script>
<!-- <script>
        function gantiFotoProfil() {
            var fileInput = document.getElementById("fileInput");
            var previewImage = document.getElementById("img-fluid");

            var file = fileInput.files[0];
            var reader = new FileReader();

            reader.onload = function(e) {
                previewImage.src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
</script>
<script>
    var chart = document.getElementById('chart3');
    var myChart = new Chart(chart, {
        type: 'line',
        data: {
            labels: ['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight'],
            datasets: [{
                    label: 'Lost',
                    lineTension: 0.2,
                    borderColor: '#d9534f',
                    borderWidth: 1.5,
                    showLine: true,
                    data: [3, 30, 16, 30, 16, 36, 21, 40, 20, 30],
                    backgroundColor: 'transparent',
                },
                {
                    label: 'Lost',
                    lineTension: 0.2,
                    borderColor: '#5cb85c',
                    borderWidth: 1.5,
                    data: [6, 20, 5, 20, 5, 25, 9, 18, 20, 15],
                    backgroundColor: 'transparent',
                },
                {
                    label: 'Lost',
                    lineTension: 0.2,
                    borderColor: '#f0ad4e',
                    borderWidth: 1.5,
                    data: [12, 20, 15, 20, 5, 35, 10, 15, 35, 25],
                    backgroundColor: 'transparent',
                },
                {
                    label: 'Lost',
                    lineTension: 0.2,
                    borderColor: '#337ab7',
                    borderWidth: 1.5,
                    data: [16, 25, 10, 25, 10, 30, 14, 23, 14, 29],
                    backgroundColor: 'transparent',
                },
            ],
        },
        options: {
            scales: {
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                    },
                    ticks: {
                        stepSize: 12,
                    },
                }, ],
                xAxes: [{
                    gridLines: {
                        display: false,
                    },
                }, ],
            },
        },
    });
</script> -->
