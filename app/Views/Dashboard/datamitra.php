<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="/css/tabel.css" />
</head>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Data <b>Mitra</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-add" data-toggle="modal"><i
                            class="fa-solid fa-user-plus"></i>
                        <span>Add</span></a>
                    <a href="#deleteEmployeeModal" class="btn btn-del" data-toggle="modal"><i
                            class="fa-solid fa-trash"></i>
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
                    <th>Logo</th>
                    <th>Perusahaan</th>
                    <th>No. Telpon</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item) {
                    echo
                    '<tr>' .
                        '<td>' .
                        '<span class="custom-checkbox">' .
                        '<input id="id-kategori" type="hidden" value="' . esc($item['id_mitra']) . '">' .
                        '<input type="checkbox" class="checkbox" name="options[]" value="' . esc($item['logo']) . '">' .
                        '<label for="checkbox"></label>' .
                        '</span>' .
                        '</td>' .
                        '<td>' . esc($item['logo']) . '</td>' .
                        '<td>' . esc($item['nama']) . '</td>' .
                        '<td>' . esc($item['no_telp']) . '</td>' .
                        '<td>' . esc($item['email']) . '</td>' .
                        '<td>' .
                        '<a href="#editEmployeeModal" class="editKategoriButton edit" data-toggle="modal" data-id="' . esc($item['id_mitra']) . '" data-logo="' . esc($item['logo']) .  '"' . '"data-nama="' . esc($item['nama']) .  '" data-email="' . esc($item['email']) . '"' . '><i class="fa-solid fa-pen-clip" data-toggle="tooltip" title="Edit"></i></a>' .
                        '<a href="#deleteEmployeeModal" class="deleteKategoriButton delete" data-toggle="modal" data-id="' . esc($item['id_mitra']) . '" data-logo="' . esc($item['logo']) .  '"' . '><i class="fa-solid fa-trash" data-toggle="tooltip" title="Delete"></i></a>' .
                        '</td>' .
                        '</tr>';
                }
                ?>
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                            <label for="checkbox1"></label>
                        </span>
                    </td>
                    <td>
                        <img src="/images/nasa.png" alt="img" />
                    </td>
                    <td>NASSA</td>
                    <td>01239147914</td>
                    <td>Nassa@gmail.com</td>
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
            <form id="addForm" action="/data-mitra/add" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" class="form-control" name="image"
                            accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" class="form-control" name="pendaftaran" required />
                    </div>
                    <div class="form-group">
                        <label>No Telpon</label>
                        <input type="number" class="form-control" name="penyisihan" required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="pengumuman" required />
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
            <form id="addForm" action="/data-mitra/edit" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" class="form-control" name="image"
                            accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" class="form-control" name="pendaftaran" required />
                    </div>
                    <div class="form-group">
                        <label>No Telpon</label>
                        <input type="number" class="form-control" name="penyisihan" required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="pengumuman" required />
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
        <div class="modal-content">
            <form id="deleteForm" action="delete_data.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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

<script src="/js/tabel.js"></script>