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
                    <th>Nama Event</th>
                    <th>Tanggal</th>
                    <th>Kapasitas</th>
                    <th>Tempat</th>
                    <th>Penanggung Jawab</th>
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
                    <td> <img src="/images/seminar-pendidikan.jpg" alt="post"> </td>
                    <td>Seminar Pendidikan</td>
                    <td>15 - 16 Februari 2024</td>
                    <td style="text-align:center">100</td>
                    <td>Gedung GSG</td>
                    <td>Dr. H. M. Nasrullah Yusuf</td>
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
                    <td> <img src="/images/desainweb.jpg" alt="post"> </td>
                    <td>Desain Web</td>
                    <td>16 - 20 Februari 2024</td>
                    <td style="text-align:center">500</td>
                    <td>Online</td>
                    <td>Dr. H. M. Nasrullah Yusuf</td>
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

                </b> out of
                <b></b> entries
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
            <form id="addForm" action="/penjadwalan/add" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Poster</label>
                        <input type="file" class="form-control" name="logo"
                            accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Event</label>
                        <input type="text" class="form-control" name="nama" required />
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" required />
                    </div>
                    <div class="form-group">
                        <label>Kapasitas</label>
                        <input type="number" class="form-control" name="kapasitas" required />
                    </div>
                    <div class="form-group">
                        <label>Tempat</label>
                        <input type="text" class="form-control" name="tempat" required />
                    </div>
                    <div class="form-group">
                        <label>Penanggung Jawab</label>
                        <input type="text" class="form-control" name="penJawab" required />
                    </div>
                    <!-- inputan informasi tidak ditampilkan di tabel, akan ditampilkan di home-event -->
                    <div class="form-group">
                        <label>Informasi</label>
                        <textarea id="informasi" class="form-control" name="informasi" rows="4" cols="25"></textarea>
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
                    <h4 class="modal-title">Add Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Poster</label>
                        <input type="file" class="form-control" name="logo"
                            accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Event</label>
                        <input type="text" class="form-control" name="nama" required />
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" required />
                    </div>
                    <div class="form-group">
                        <label>Kapasitas</label>
                        <input type="number" class="form-control" name="kapasitas" required />
                    </div>
                    <div class="form-group">
                        <label>Tempat</label>
                        <input type="text" class="form-control" name="tempat" required />
                    </div>
                    <div class="form-group">
                        <label>Penanggung Jawab</label>
                        <input type="text" class="form-control" name="penJawab" required />
                    </div>
                    <div class="form-group">
                        <label>Informasi</label>
                        <textarea id="informasi" class="form-control" name="informasi" rows="4" cols="25"></textarea>
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

<script src="/js/tabel/penjadwalan.js"></script>