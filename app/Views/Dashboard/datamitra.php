<?php
helper('form');
?>
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
                    <a id="deletSelectCategory" href="#deleteEmployeeModal" class="btn btn-del" data-toggle="modal"><i
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
                            <input type="checkbox" id="checkbox_selectAll">
                            <label for="checkbox_selectAll"></label>
                        </span>
                    </th>
                    <th>Logo</th>
                    <th>Perusahaan</th>
                    <th>No. Telpon</th>
                    <th>Email</th>
                    <th>Pendanaan</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $item) {
                    $fmt = numfmt_create( 'id_ID', NumberFormatter::CURRENCY );
                    echo
                    '<tr>' .
                        '<td>' .
                        '<span class="custom-checkbox">' .
                        '<input type="checkbox" class="checkbox" name="options[]" value="' . $key . '">' .
                        '<label for="checkbox"></label>' .
                        '</span>' .
                        '</td>' .
                        '<td>' . '<img src="/uploads/images/'.esc($item['logo']).'" alt="logo">' . '</td>' .
                        '<td>' . esc($item['nama']) . '</td>' .
                        '<td>' . esc($item['no_telp']) . '</td>' .
                        '<td>' . esc($item['email']) . '</td>' .
                        '<td>' . esc(numfmt_format_currency($fmt, $item['pendanaan'], "IDR")) . '</td>' .
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
            <?= form_open_multipart('/data-mitra/add', ["id" => "addForm"]) ?>
                <div class="modal-header">
                    <h4 class="modal-title">Add Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" class="form-control" name="logo"
                            accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama" required />
                    </div>
                    <div class="form-group">
                        <label>No Telpon</label>
                        <input type="number" class="form-control" name="no_telp" required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required />
                    </div>
                    <div class="form-group">
                        <label>Pendanaan</label>
                        <input type="number" class="form-control" name="pendanaan" required />
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
            <?= form_open_multipart('/data-mitra/edit', ["id" => "addForm"]) ?>
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="hidden" class="form-control" name="id_mitra" required />
                        <input type="file" class="form-control" name="logo"
                            accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" class="form-control" name="nama" required />
                    </div>
                    <div class="form-group">
                        <label>No Telpon</label>
                        <input type="number" class="form-control" name="no_telp" required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required />
                    </div>
                    <div class="form-group">
                        <label>Pendanaan</label>
                        <input type="number" class="form-control" name="pendanaan" required />
                    </div>
                </div>
                <!-- Notifikasi -->
                <div id="notification" style="display: none;"></div>
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
        <div class="modal-content">
            <form id="deleteForm" action="/data-mitra/delete" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="deleteId" id="deleteId" />
                    <p>Data yang dipilih akan terhapus, hapus data?</p>
                    <p class="text-warning">
                    <ul class="list-data">
                    </ul>
                    </p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
                    <input type="submit" class="btn btn-danger" value="Delete" />
                </div>
            </form>
        </div>
    </div>
</div>

<script>
var data_table = <?php echo json_encode($data); ?>
</script>
<script src="/js/tabel/datamitra.js"></script>