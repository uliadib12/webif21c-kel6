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
                    <h2>Tabel <b>Kegiatan</b></h2>
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
                    <th>Poster</th>
                    <th>Banner</th>
                    <th>Nama Event</th>
                    <th>Informasi</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Penanggung Jawab</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $item) {
                    function truncateString($string, $maxLength) {
                        if (strlen($string) > $maxLength) {
                            $string = substr($string, 0, $maxLength - 3) . '...';
                        }
                        return $string;
                    }

                    echo
                    '<tr>' .
                        '<td>' .
                        '<span class="custom-checkbox">' .
                        '<input type="checkbox" class="checkbox" name="options[]" value="' . $key . '">' .
                        '<label for="checkbox"></label>' .
                        '</span>' .
                        '</td>' .
                        '<td>' . '<img src="/uploads/images/'.esc($item['gambar_poster']).'" alt="logo">' . '</td>' .
                        '<td>' . '<img src="/uploads/images/'.esc($item['gambar_banner']).'" alt="logo">' . '</td>' .
                        '<td>' . esc($item['nama']) . '</td>' .
                        '<td>' . esc(truncateString($item['keterangan'], 20)) . '</td>' .
                        '<td>' . esc(date('d F Y', strtotime($item['tanggal']))) . '</td>' .
                        '<td>' . esc($item['tempat']) . '</td>' .
                        '<td>' . esc($item['penanggung_jawab']) . '</td>' .
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
            <?= form_open_multipart('/kegiatan/add', ["id" => "addForm"]) ?>
                <div class="modal-header">
                    <h4 class="modal-title">Add Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Poster</label>
                        <input type="file" class="form-control" name="poster"
                            accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>
                    <div class="form-group">
                        <label>Banner</label>
                        <input type="file" class="form-control" name="banner"
                            accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Event</label>
                        <input type="text" class="form-control" name="nama" required />
                    </div>
                    <!-- inputan informasi tidak ditampilkan di tabel, akan ditampilkan di home-event -->
                    <div class="form-group">
                        <label>Informasi</label>
                        <textarea id="informasi" class="form-control" name="informasi" rows="4" cols="25"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" required />
                    </div>
                    <div class="form-group">
                        <label>Tempat</label>
                        <input type="text" class="form-control" name="tempat" required />
                    </div>
                    <div class="form-group">
                        <label>Penanggung Jawab</label>
                        <input type="text" class="form-control" name="penanggung_jawab" required />
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
            <?= form_open_multipart('/kegiatan/edit', ["id" => "addForm"]) ?>
                <div class="modal-header">
                    <h4 class="modal-title">Add Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="id" required />
                        <div class="form-group">
                            <label>Poster</label>
                            <input type="file" class="form-control" name="poster"
                                accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                        </div>
                        <div class="form-group">
                            <label>Banner</label>
                            <input type="file" class="form-control" name="banner"
                                accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Event</label>
                            <input type="text" class="form-control" name="nama" required />
                        </div>
                        <!-- inputan informasi tidak ditampilkan di tabel, akan ditampilkan di home-event -->
                        <div class="form-group">
                            <label>Informasi</label>
                            <textarea id="informasi" class="form-control" name="informasi" rows="4" cols="25"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" required />
                        </div>
                        <div class="form-group">
                            <label>Tempat</label>
                            <input type="text" class="form-control" name="tempat" required />
                        </div>
                        <div class="form-group">
                            <label>Penanggung Jawab</label>
                            <input type="text" class="form-control" name="penanggung_jawab" required />
                        </div>
                    </div>
                    <!-- Notifikasi -->
                    <div id="notification" style="display: none;"></div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" />
                        <input type="submit" class="btn btn-success" value="Edit" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
    <div class="modal-dialog">
        <form id="deleteForm" action="/kegiatan/delete" method="POST">
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
<script src="/js/tabel/kegiatan.js"></script>