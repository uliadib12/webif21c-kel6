<head>
    <link rel="stylesheet" href="/css/v.css" />
    <link rel="stylesheet" href="/css/tabel.css" />
    <link rel="stylesheet" href="/css/keterangan.css" />
</head>

<div class="profile">
   <img class="img-fluid" width="200" src=" /images/AlbertEinstein.jpg" alt="profile" />
   <input type="file" id="fileInput" accept="image/*" onchange="gantiFotoProfil()">

    <form action="/update-profile" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="JohnDoe" required />

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="johndoe@example.com" required />

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required />

        <label for="new-password">New Password</label>
        <input type="password" name="new-password" id="new-password" />

        <label for="confirm-password">Confirm Password</label>
        <input type="password" name="confirm-password" id="confirm-password" />

        <input type="submit" value="Save Changes" />
    </form>
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
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll">
                            <label for="selectAll"></label>
                        </span>
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


<script src="/js/tabel.js"></script>
<script>
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
</script>
