<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="/css/tabel.css" />
</head>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Event's</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-add" data-toggle="modal"><i class="fa-solid fa-user-plus"></i>
                        <span>Add</span></a>
                    <a href="#deleteEmployeeModal" class="btn btn-del" data-toggle="modal"><i class="fa-solid fa-trash"></i>
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
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
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
                <?php foreach ($data as $item) {
                    echo '<tr>' .
                    '<td>' .
                    '<span class="custom-checkbox">' .
                    '<input type="checkbox" id="checkbox1" name="options[]" value="1">' .
                    '<label for="checkbox1"></label>' .
                    '</span>' .
                    '</td>' .
                    '<div class="id_kategori" style="display: none;">'. $item['id'] .'</div>' .
                    '<td>'. $item['kategori'] .'</td>' .
                    '<td>'. $item['pendaftaran'] . '<br>' . $item['jamAwalPendaftaran'] . ' - ' . $item['jamAkhirPendaftaran'] .' WIB</td>' .
                    '<td>'. $item['penyisihan'] . '<br>' . $item['jamAwalPenyisihan'] . ' - ' . $item['jamAkhirPenyisihan'] .' WIB</td>' .
                    '<td>'. $item['pengumuman'] .'</td>' .
                    '<td>'. $item['final'].'</td>' .
                    '<td>' .
                    '<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa-solid fa-pen-clip" data-toggle="tooltip" title="Edit"></i></a>' .
                    '<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa-solid fa-trash" data-toggle="tooltip" title="Delete"></i></a>' .
                    '</td>' .
                    '</tr>';
                }
                ?>
            </tbody>
        </table>
        <div class="clearfix">
            <div class="hint-text">Showing <b>5</b> out of
                <b>25</b> entries
            </div>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#">Previous</a></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link">Next</a></li>
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
                    <input type="submit" class="btn btn-success" value="Add" />
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteForm" action="/penjadwalan/delete" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
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