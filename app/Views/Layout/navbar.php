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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Setting </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">My Account</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <hr class="dropdown-divider" />
                        <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/"><i class="fa-solid fa-house"></i></a>
                </li>
                <li id="myButton" class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-comment-dots"></i><span>23</span></a>
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <p>Ini adalah konten dari modal.</p>
                        </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-bell"></i><span>98</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> </a>
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