<aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
    <i class="fa-solid fa-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
    <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
        <img class="img-fluid" width="65" src=" /images/AlbertEinstein.jpg" alt="profile" />
        <div class="ms-2">
            <h5 class="fs-6 mb-0">
                <a class="text-decoration-none" href="<?= (isset($user)) ? "/profile" : "/login" ?>">
                    <?php if (isset($user)) : ?>
                    <?= esc($user->username) ?>
                    <?php else : ?>
                    Login
                    <?php endif ?>
                </a>
            </h5>
            <p class="mt-1 mb-0">Admin</p>
        </div>
    </div>

    <div class="search position-relative text-center px-4 py-3 mt-2">
        <input type="text" class="form-control w-100 border-0 bg-transparent" placeholder="Search here" />
        <i class="fa fa-search position-absolute d-block fs-6"></i>
    </div>

    <ul class="categories list-unstyled">
        <li id="dashboard" class="icon-container"><i class="fa-solid fa-gauge"></i> <a href="/dashboard">
                Dashboard</a>
        </li>
        <li class="has-dropdown">
            <i class="fa-solid fa-calendar"></i><a href="#"> Event</a>
            <ul class="sidebar-dropdown list-unstyled">
                <li id="dataKegiatan"><a href="#">Kegiatan</a></li>
                <li id="penjadwalan"><a href="#">Kategori</a></li>
            </ul>
        </li>
        <!-- <li class="has-dropdown">
            <i class="fa-brands fa-redhat"></i><a href="#"> Kepanitiaan</a>
            <ul class="sidebar-dropdown list-unstyled">
                <li id="sk"><a href="#">SK</a></li>
                <li id="panitia"><a href="#">Panitia</a></li>
            </ul>
        </li> -->
        <li id="sertifikasi" class="icon-container">
            <i class="fa-solid fa-address-card"></i>
            <a href="#"> Sertifikasi</a>
        </li>
        <li id="dataMitra" class="icon-container">
            <i class="fa-regular fa-handshake"></i>
            <a href="#"> Data Mitra</a>
        </li>
        <li id="myDiv" class="icon-container">
            <i class="fa-solid fa-right-from-bracket"></i>
            <a href="/logout"> Log Out</a>
        </li>
    </ul>
</aside>