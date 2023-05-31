<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="/css/tabel.css" />
</head>
<div class="p-4">
    <div class="welcome">
        <div class="content p-3">
            <h1 class="fs-3">Manage Kategori Event</h1>
            <p class="mb-0">Kategori berisi semua Kategori dalam Event yang diadakan!</p>
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
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Penjadwalan <b>Kampus Expo</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-add" data-toggle="modal"><i class="fa-solid fa-user-plus"></i>
                        <span>Add</span></a>
                    <a id="deletSelectCategory" href="#deleteEmployeeModal" class="btn btn-del" data-toggle="modal"><i class="fa-solid fa-trash"></i>
                        <span>Delete</span></a>
                </div>
            </div>
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
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox_selectAll">
                            <label for="checkbox_selectAll"></label>
                        </span>
                    </th>
                    <th>Kategori</th>
                    <th>Pendaftaran</th>
                    <th>Penyisihan</th>
                    <th>Pengumuman</th>
                    <th>Final</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $item) {
                    echo
                    '<tr>' .
                        '<td>' .
                        '<span class="custom-checkbox">' .
                        '<input type="checkbox" class="checkbox" name="options[]" value="' . $key . '">' .
                        '<label for="checkbox"></label>' .
                        '</span>' .
                        '</td>' .
                        '<td>' . esc($item['kategori']) . '</td>' .
                        '<td>' . esc(date('d F Y', strtotime($item['pendaftaran']))) . '<br>' . esc(substr($item['jamAwalPendaftaran'], 0, -3)) . ' - ' . esc(substr($item['jamAkhirPendaftaran'], 0, -3)) . ' WIB</td>' .
                        '<td>' . esc(date('d F Y', strtotime($item['penyisihan']))) . '<br>' . esc(substr($item['jamAwalPenyisihan'], 0, -3)) . ' - ' . esc(substr($item['jamAkhirPenyisihan'], 0, -3)) . ' WIB</td>' .
                        '<td>' . esc(date('d F Y', strtotime($item['pengumuman']))) . '</td>' .
                        '<td>' . esc(date('d F Y', strtotime($item['final']))) . '</td>'     .
                        '<td>' .
                        '<a href="#editEmployeeModal" class="editKategoriButton edit" data-toggle="modal" data-index="' . $key . '"><i class="fa-solid fa-pen-clip" data-toggle="tooltip" title="Edit"></i></a>' .
                        '<a href="#deleteEmployeeModal" class="deleteKategoriButton delete" data-toggle="modal" data-index="' . $key . '"><i class="fa-solid fa-trash" data-toggle="tooltip" title="Delete"></i></a>' .
                        '</td>' .
                        '</tr>';
                }
                ?>
            </tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text">Showing <b>
                    <?php
                    if ($page == $pageCount) {
                        echo $countAllRow;
                    }

                    if ($page < $pageCount) {
                        echo $maxPaginate * $page;
                    }
                    ?>
                </b> out of
                <b><?= $countAllRow ?></b> entries
            </div>
            <ul class="pagination">

                <li class="page-item <?= ($page == 1) ? "disabled" : "" ?>"><a href="
                <?php
                if ($page == 1) {
                    echo '#';
                } else {
                    echo '?page=' . ($page - 1);
                }
                ?>
                " class="page-link">Previous</a></li>

                <?php
                for ($i = 1; $i <= $pageCount; $i++) {
                    // /add class active if $i == $page
                    if ($i == $page) {
                        echo '<li class="page-item active"><a href="?page=' . $i . '" class="page-link">' . $i . '</a></li>';
                        continue;
                    }
                    echo '<li class="page-item"><a href="?page=' . $i . '" class="page-link">' . $i . '</a></li>';
                }
                ?>

                <li class="page-item <?= ($page == $pageCount) ? "disabled" : "" ?>"><a href="
                <?php
                if ($page == $pageCount) {
                    echo '#';
                } else {
                    if ($pageCount == 0) {
                        echo '#';
                    } else {
                        echo '?page=' . ($page + 1);
                    }
                }
                ?>
                " class="page-link">Next</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addForm" action="/penjadwalan/add" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" class="form-control" name="kategori" required />
                    </div>
                    <div class="form-group">
                        <label>Pendaftaran</label>
                        <input type="date" class="form-control" name="pendaftaran" required />
                        <label for="jamAwalPendaftaran">Dari:</label>
                        <input type="time" id="jamAwalPendaftaran" name="jamAwalPendaftaran" />
                        <label for="jamAkhirPendaftaran">Sampai:</label>
                        <input type="time" id="jamAkhirPendaftaran" name="jamAkhirPendaftaran" />
                    </div>
                    <div class="form-group">
                        <label>Penyisihan</label>
                        <input type="date" class="form-control" name="penyisihan" required />
                        <label for="jamAwalPenyisihan">Dari:</label>
                        <input type="time" id="jamAwalPenyisihan" name="jamAwalPenyisihan" />
                        <label for="jamAkhirPenyisihan">Sampai:</label>
                        <input type="time" id="jamAkhirPenyisihan" name="jamAkhirPenyisihan" />
                    </div>
                    <div class="form-group">
                        <label>Pengumuman</label>
                        <input type="date" class="form-control" name="pengumuman" required />
                    </div>
                    <div class="form-group">
                        <label>Final</label>
                        <input type="date" class="form-control" name="final" required />
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
            <form id="addForm" action="/penjadwalan/edit" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" required />
                        <label>Kategori</label>
                        <input type="text" class="form-control" name="kategori" required />
                    </div>
                    <div class="form-group">
                        <label>Pendaftaran</label>
                        <input type="date" class="form-control" name="pendaftaran" required />
                        <label for="jamAwalPendaftaran">Jam Awal:</label>
                        <input type="time" id="jamAwalPendaftaran" name="jamAwalPendaftaran" />
                        <label for="jamAkhirPendaftaran">Jam Akhir:</label>
                        <input type="time" id="jamAkhirPendaftaran" name="jamAkhirPendaftaran" />
                    </div>
                    <div class="form-group">
                        <label>Penyisihan</label>
                        <input type="date" class="form-control" name="penyisihan" required />
                        <label for="jamAwalPenyisihan">Jam Awal:</label>
                        <input type="time" id="jamAwalPenyisihan" name="jamAwalPenyisihan" />
                        <label for="jamAkhirPenyisihan">Jam Akhir:</label>
                        <input type="time" id="jamAkhirPenyisihan" name="jamAkhirPenyisihan" />
                    </div>
                    <div class="form-group">
                        <label>Pengumuman</label>
                        <input type="date" class="form-control" name="pengumuman" required />
                    </div>
                    <div class="form-group">
                        <label>Final</label>
                        <input type="date" class="form-control" name="final" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
                    <input type="submit" class="btn btn-success" value="Edit" />
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
<script>
    var data_table = <?php echo json_encode($data); ?>
</script>
<script src="/js/tabel/penjadwalan.js"></script>