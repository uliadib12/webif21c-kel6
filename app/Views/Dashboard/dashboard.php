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