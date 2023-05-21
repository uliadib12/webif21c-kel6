<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="/css/tabel.css" />
</head>
<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Peserta</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#addEmployeeModal" class="btn btn-add" data-toggle="modal"><i class="fa-solid fa-user-plus"></i>
                        <span>Add</span></a>
                    <a href="#deleteEmployeeModal" class="btn btn-del" data-toggle="modal"><i class="fa-solid fa-trash"></i>
                        <span>Delete</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </span>
                    </th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Prodi</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Actions</th>
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
                    <td>Ahmad Saifullah</td>
                    <td>21312117</td>
                    <td>Informatika</td>
                    <td>IF 20B</td>
                    <td>Online</td>
                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa-solid fa-pen-clip" data-toggle="tooltip" title="Edit"></i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa-solid fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox2" name="options[]" value="1">
                            <label for="checkbox2"></label>
                        </span>
                    </td>
                    <td>M. Yusuf Sahide</td>
                    <td>21311160</td>
                    <td>Sistem Informasi</td>
                    <td>SI 11A</td>
                    <td>Offline</td>
                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa-solid fa-pen-clip" data-toggle="tooltip" title="Edit"></i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa-solid fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox3" name="options[]" value="1">
                            <label for="checkbox3"></label>
                        </span>
                    </td>
                    <td>M. Yusuf Sahide</td>
                    <td>21311160</td>
                    <td>Sistem Informasi</td>
                    <td>SI 11A</td>
                    <td>Offline</td>
                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa-solid fa-pen-clip" data-toggle="tooltip" title="Edit"></i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa-solid fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox4" name="options[]" value="1">
                            <label for="checkbox4"></label>
                        </span>
                    </td>
                    <td>M. Yusuf Sahide</td>
                    <td>21311160</td>
                    <td>Sistem Informasi</td>
                    <td>SI 11A</td>
                    <td>Offline</td>
                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa-solid fa-pen-clip" data-toggle="tooltip" title="Edit"></i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa-solid fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox5" name="options[]" value="1">
                            <label for="checkbox5"></label>
                        </span>
                    </td>
                    <td>M. Yusuf Sahide</td>
                    <td>21311160</td>
                    <td>Sistem Informasi</td>
                    <td>SI 11A</td>
                    <td>Offline</td>
                    <td>
                        <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="fa-solid fa-pen-clip" data-toggle="tooltip" title="Edit"></i></a>
                        <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="fa-solid fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                    </td>
                </tr>
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
            <form id="addForm" action="/SettingT/add_data.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Add Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa-solid fa-xmark"></i></button>
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
            <form id="addForm" action="/SettingT/add_data.php" method="POST">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Kategori</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa-solid fa-xmark"></i></button>
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
<section class="charts mt-4">
    <div class="chart-container p-3">
        <h3 class="fs-6 mb-3">Chart title number three</h3>
        <div style="height: 300px">
            <canvas id="chart3" width="100%"></canvas>
        </div>
    </div>
</section>
<script src="/js/tabel.js"></script>
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
</script>