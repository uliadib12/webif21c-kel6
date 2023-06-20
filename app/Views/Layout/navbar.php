<nav class="navbar navbar-expand-md">
    <div class="container-fluid mx-2">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-white"></i>
            </button>
            <a class="navbar-brand" href="#"> <?= $kategori ?></a>
        </div>
        <div class="collapse navbar-collapse" id="toggle-navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fa-solid fa-house"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i data-show="show-side-navigation1" class="fa-solid fa-bars burger show-side-btn"></i>
                        <i data-show="show-side-navigation1" class="menu show-side-btn">Menu</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>