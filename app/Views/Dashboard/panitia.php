<head>
    <link rel="stylesheet" href="/css/tabel.css" />
    <link rel="stylesheet" href="/css/panitia.css" />
</head>
<div class="p-4">
    <div class="welcome">
        <div class="content p-3">
            <h1 class="fs-3">Manage Panitia</h1>
            <p class="mb-0">Event berisi semua Event yang diadakan!</p>
            <p class="mb-0">Menu Berfungsi untuk Action!</p>
        </div>
    </div>
    <section class="statistics mt-3">
        <div class="row">
            <div class="col-lg-2 ">
                <div id="EventDropdown" class="box d-flex custom-dropdown">
                    <div class="row ms-1 mb-1">
                        <div class="d-flex align-items-center p-3">
                            <li class="custom-dropdown">
                                <a href="#" class="dropdown-toggle"><span class="d-block ms-3">Event </span></a>
                                <ul class="dropdown-menu">
                                    <li class="has-submenu">
                                        <a href="#">Seminar Pendidikan</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Gemastik</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Gebyar islami</a>
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Hari Musik</a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div id="MenuDropdown" class="box d-flex custom-dropdown">
                    <div class="row ms-1 mb-1">
                        <div class="d-flex p-3">
                            <li class="custom-dropdown">
                                <a href="#" class="dropdown-toggle"><span class="d-block ms-3">Menu</span></a>
                                <ul class="dropdown-menu">
                                    <li class="has-submenu">
                                        <a href="#">Sertifikat</a>
                                        <!-- <ul class="submenu list-unstyled">
                                            <li><a href="#">Seminar Pendidikan</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="has-submenu">
                                        <a href="#">Laporan</a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Isi Tabel Berubah Sesuai Kategori Event yg dipilih pada #EventDropdown -->

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Panitia</b> <span>Expo</span></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-add" data-toggle="modal"><i
                            class="fa-solid fa-user-plus"></i>
                        <span>Add</span></a>
                    <a id="deletSelectCategory" href="#deleteEmployeeModal" class="btn btn-del" data-toggle="modal"><i
                            class="fa-solid fa-trash"></i>
                        <span>Delete</span></a>
                </div>
            </div>
        </div>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox_selectAll">
                            <label for="checkbox_selectAll"></label>
                        </span>
                    </th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Panitia Event</th>
                    <th>Jabatan</th>
                    <th>Kontak</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox5" name="options[]" value="1">
                            <label for="checkbox5"></label>
                        </span>
                    </td>
                    <td>0021</td>
                    <td>Adityamfu</td>
                    <td>Desain Web</td>
                    <td>Anggota</td>
                    <td>Adityamfu@gmail.com</td>
                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa-solid fa-pen-clip"
                                data-toggle="tooltip" title="Edit"></i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa-solid fa-trash"
                                data-toggle="tooltip" title="Delete"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox5" name="options[]" value="1">
                            <label for="checkbox5"></label>
                        </span>
                    </td>
                    <td>0030</td>
                    <td>Adib Ulinuha</td>
                    <td>Desain Web</td>
                    <td>Ketua</td>
                    <td>Uliadib@gmail.com</td>
                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa-solid fa-pen-clip"
                                data-toggle="tooltip" title="Edit"></i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa-solid fa-trash"
                                data-toggle="tooltip" title="Delete"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text">Showing <b>5
                </b> out of
                <b>25</b> entries
            </div>
            <ul class="pagination">

                <li class="page-item "><a href="
                
                " class="page-link">Previous</a></li>



                <li class="page-item "><a href="
                
                " class="page-link">Next</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addForm" action="/panitia/add" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" class="form-control" name="nama" required />
                    </div>
                    <div class="form-group">
                        <label>Panitia Event :</label>
                        <input type="text" class="form-control" name="panitiaEvent" required />
                    </div>
                    <div class="form-group">
                        <label>Jabatan :</label>
                        <select class="form-control" id="jabatan" name="jabatan" required>
                            <option value="red">Ketua</option>
                            <option value="blue">Sekertaris</option>
                            <option value="green">Anggota</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pengumuman :</label>
                        <input type="date" class="form-control" name="pengumuman" required />
                    </div>
                    <div class="form-group">
                        <label>Kontak :</label>
                        <input type="email" class="form-control" name="email" required />
                    </div>
                </div>
                <!-- Notifikasi -->
                <div id="notification" style="display: none;"></div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
                    <input type="submit" class="btn btn-success" value="Add" />
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addForm" action="/panitia/edit" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama :</label>
                        <input type="text" class="form-control" name="nama" required />
                    </div>
                    <div class="form-group">
                        <label>Panitia Event :</label>
                        <input type="text" class="form-control" name="panitiaEvent" required />
                    </div>
                    <div class="form-group">
                        <label>Jabatan :</label>
                        <select class="form-control" id="jabatan" name="jabatan" required>
                            <option value="red">Ketua</option>
                            <option value="blue">Sekertaris</option>
                            <option value="green">Anggota</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pengumuman :</label>
                        <input type="date" class="form-control" name="pengumuman" required />
                    </div>
                    <div class="form-group">
                        <label>Kontak :</label>
                        <input type="email" class="form-control" name="email" required />
                    </div>
                </div>
                <!-- Notifikasi -->
                <div id="notification" style="display: none;"></div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
                    <input type="submit" class="btn btn-success" value="Add" />
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <form id="deleteForm" action="/penjadwalan/delete" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Data yang dipilih akan terhapus, hapus data?</p>
                    <p class="text-warning">
                    <ul class="list-data">
                    </ul>
                    </small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
                    <input id="modal-delete-button" type="submit" class="btn btn-danger" value="Delete" />
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container">
    <p class="p-3" style="font-size:medium">
        Tutup SideBar untuk melihat struktur lebih jelas!
    </p>
</div>
<div class="p-4 org-tree">
    <div class="tree">
        <ul>
            <li>
                <a href="#">
                    <h4>Penanggung Jawab</h4>
                    <p>Dr. H. M. Nasrullah Yusuf</p>
                </a>
                <div class="tree">
                    <ul>
                        <li>
                            <a href="#">
                                <h4>Ketua Pelaksana</h4>
                                <p>Aditya Muhammad</p>
                            </a>
                            <ul class="child">
                                <li>
                                    <a href="#">
                                        <h4>Sekertaris</h4>
                                        <p>Vera Afridita</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h4>Koordinator</h4>
                                        <p>Adib Ulinuha</p>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <h4>Divisi Humas</h4>
                                                <p>Aditya Saputra</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h4>Divisi Perlengkapan</h4>
                                                <p>Verlando Akbar</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h4>Divisi Konsumsi</h4>
                                                <p>Ni Ketut Triayu</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h4>Divisi Acara</h4>
                                                <p>Theorema Fosheca</p>
                                            </a>
                                            <ul class="vertical">
                                                <li><a href="#">UI/UX</a></li>
                                                <li><a href="#">Robotic</a></li>
                                                <li><a href="#">CTF</a></li>
                                                <li><a href="#">iOT</a></li>
                                                <li><a href="#">Web Dev</a></li>
                                                <li><a href="#">Mobile Dev</a></li>
                                                <li><a href="#">Game For Education</a></li>
                                                <li><a href="#">Kemanan Jaringan</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h4>Divisi Dokumentasi</h4>
                                                <p>Nur Fadila</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <h4>Divisi Keamanan</h4>
                                                <p>Ilham Nasul</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <h4>Bendahara</h4>
                                        <p>Dinara Indri P</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
<a href="javascript:void(0);" id="back-to-top" onclick="scrollToTop()"><i class="fa-solid fa-caret-up"></i></a>
<script>
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById('back-to-top').style.display = 'block';
    } else {
        document.getElementById('back-to-top').style.display = 'none';
    }
}

function scrollToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<script src="/js/tabel/panitia.js"></script>