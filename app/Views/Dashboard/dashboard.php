<div class="p-4">
    <div class="welcome">
        <div class="content p-3">
            <h1 class="fs-3">Welcome to Dashboard</h1>
            <p class="mb-0">Hello Adityamfu, welcome to your awesome dashboard!</p>
        </div>
    </div>
    <section class="statistics mt-4">
        <div class="row">
            <div class="col-lg-4">
                <div class="box d-flex">
                    <i class="fa-solid fa-user-tie fs-5 text-center"></i>
                    <div class="ms-3 mb-2">
                        <div class="d-flex align-items-center p-3">
                            <h3 class="mb-0"><?= $jumlah_admin ?></h3>
                            <span class="d-block ms-2">Admin's</span>
                        </div>
                        <p class="fs-normal mb-0">Status</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box d-flex">
                    <i class="fa-solid fa-calendar-day fs-5 text-center"></i>
                    <div class="ms-3 mb-2">
                        <div class="d-flex align-items-center p-3">
                            <h3 class="mb-0"><?= $jumlah_kategori ?></h3>
                            <span class="d-block ms-2">Event</span>
                        </div>
                        <p class="fs-normal mb-0">Status</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box d-flex">
                    <i class="fa-solid fa-users fs-5 text-center"></i>
                    <div class="ms-3 mb-2">
                        <div class="d-flex align-items-center p-3">
                            <h3 class="mb-0"><?= $jumlah_user ?></h3>
                            <span class="d-block ms-2">User's</span>
                        </div>
                        <p class="fs-normal mb-0">Status</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="statistics mt-4">
        <div class="row">
            <div class=" col-lg-4">
                <div class="box d-flex">
                    <i class="fa-solid fa-clipboard fs-5 text-center"></i>
                    <div class="ms-3 mb-2">
                        <div class="d-flex align-items-center p-3">
                            <h3 class="mb-0">2</h3>
                            <span class="d-block ms-2">Tugas</span>
                        </div>
                        <p class="fs-normal mb-0">Status</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box d-flex">
                    <i class="fa-solid fa-file-signature fs-5 text-center"></i>
                    <div class="ms-3 mb-2">
                        <div class="d-flex align-items-center p-3">
                            <h3 class="mb-0">34</h3>
                            <span class="d-block ms-2">Laporan</span>
                        </div>
                        <p class="fs-normal mb-0">Status</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box d-flex">
                    <i class="fa-solid fa-handshake fs-5 text-center"></i>
                    <div class="ms-3 mb-2">
                        <div class="d-flex align-items-center p-3">
                            <h3 class="mb-0"><?= $jumlah_mitra ?></h3>
                            <span class="d-block ms-2">Mitra</span>
                        </div>
                        <p class="fs-normal mb-0">Status</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="charts mt-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="chart-container p-3">
                <h3 class="fs-6 mb-3">Chart title number one</h3>
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="chart-container p-3">
                <h3 class="fs-6 mb-3">Chart title number two</h3>
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>
</section>
<section class="admins mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <h4>Admins:</h4>
                <div class="admin d-flex align-items-center p-3 mb-4">
                    <div class="img">
                        <img class="img-fluid" width="75" height="75" src="" alt="admin" />
                    </div>
                    <div class="ms-3">
                        <h3 class="fs-5 mb-1">Adityamfu</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                    </div>
                </div>
                <div class="admin d-flex align-items-center p-3 mb-4">
                    <div class="img">
                        <img class="img-fluid" width="75" height="75" src="" alt="admin" />
                    </div>
                    <div class="ms-3">
                        <h3 class="fs-5 mb-1">Adityamfu</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                    </div>
                </div>
                <div class="admin d-flex align-items-center p-3 mb-4">
                    <div class="img">
                        <img class="img-fluid" width="75" height="75" src="" alt="admin" />
                    </div>
                    <div class="ms-3">
                        <h3 class="fs-5 mb-1">Adityamfu</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box">
                <h4>Agenda:</h4>
                <div class="admin d-flex align-items-center p-3 mb-4">
                    <div class="img">
                        <img class="img-fluid" width="75" height="75" src="" alt="admin" />
                    </div>
                    <div class="ms-3">
                        <h3 class="fs-5 mb-1">CTF</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                    </div>
                </div>
                <div class="admin d-flex align-items-center p-3 mb-4">
                    <div class="img">
                        <img class="img-fluid" width="75" height="75" src="" alt="admin" />
                    </div>
                    <div class="ms-3">
                        <h3 class="fs-5 mb-1">Desain Web</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                    </div>
                </div>
                <div class="admin d-flex align-items-center p-3">
                    <div class="img">
                        <img class="img-fluid" width="75" height="75" src="" alt="admin" />
                    </div>
                    <div class="ms-3">
                        <h3 class="fs-5 mb-1">UI/UX</h3>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="statis mt-4 text-center">
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="box bg-primary p-3">
                <i class="uil-eye"></i>
                <h3>154</h3>
                <p class="lead">Admin</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="box bg-danger p-3">
                <i class="uil-user"></i>
                <h3>545</h3>
                <p class="lead">User</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
            <div class="box bg-warning p-3">
                <i class="uil-shopping-cart"></i>
                <h3>20</h3>
                <p class="lead">Pengawas</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="box bg-success p-3">
                <i class="uil-feedback"></i>
                <h3>2</h3>
                <p class="lead">Laporan</p>
            </div>
        </div>
    </div>
</section>
<!-- <button onclick="showNotification()">Klik untuk notifikasi</button> -->
<section class="charts mt-4">
    <div class="chart-container p-3">
        <h3 class="fs-6 mb-3">Chart title number three</h3>
        <div style="height: 300px">
            <canvas id="chart3" width="100%"></canvas>
        </div>
    </div>
</section>
</div>
</section>