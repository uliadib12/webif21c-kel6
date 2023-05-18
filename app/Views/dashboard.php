<!DOCTYPE html>
<html lang="en">

<?= $this->include('Layout/header') ?>

<body>

    <?= $this->include('Layout/sidebar') ?>
    <section id="wrapper">
        <?= $this->include('Layout/navbar') ?>

        <?= $this->include('Dashboard/' . $kategori) ?>


        <script>
            const myButton = document.querySelector('#myButton');
            const modal = document.querySelector('#myModal');
            const closeBtn = document.querySelector('.close');

            myButton.addEventListener('click', function() {
                modal.style.display = 'block';
            });

            closeBtn.addEventListener('click', function() {
                modal.style.display = 'none';
            });

            window.addEventListener('click', function(event) {
                if (event.target == modal) {
                    modal.style.display = 'none';
                }
            });
        </script>
        <!-- <script>
      function showNotification() {
        // Mengecek apakah browser mendukung notifikasi
        if ('Notification' in window) {
          // Meminta izin ke Browser
          Notification.requestPermission().then(function (permission) {
            // Tampilkan notifikasi
            if (permission === 'granted') {
              var notification = new Notification('Notifikasi', {
                body: 'Ini adalah contoh notifikasi!',
                icon: 'https://via.placeholder.com/50',
              });
            }
          });
        } else {
          // Tampilkan pesan error
          alert('Browser Anda tidak mendukung notifikasi!');
        }
      }
    </script> -->
        <script>
            const myDiv = document.querySelector('#myDiv');
            const dashboard = document.querySelector('#dashboard');
            const dataMitra = document.querySelector('#dataMitra');
            const penjadwalan = document.querySelector('#penjadwalan');
            const dataKegitan = document.querySelector('#dataKegiatan');
            const panitia = document.querySelector('#panitia');

            myDiv.addEventListener('click', function() {
                alert('Berhasil Log Out!');
            });
            dashboard.addEventListener('click', function redirec() {
                window.location.href = '/dashboard';
            });
            dataMitra.addEventListener('click', function redirec() {
                window.location.href = '/dashboard/data-mitra';
            });

            penjadwalan.addEventListener('click', function redirec() {
                window.location.href = '/dashboard/pengingat/penjadwalan';
            });
            dataKegiatan.addEventListener('click', function redirec() {
                window.location.href = '/dashboard/pengingat/data-kegiatan';
            });
            panitia.addEventListener('click', function redirec() {
                window.location.href = '/dashboard/kepanitiaan/panitia';
            });
        </script>

        <script>
            const desainWeb = document.querySelector('#desainWeb');
            const pemrogramanMobile = document.querySelector('#pemrogramanMobile');
            const uiUx = document.querySelector('#uiUx');
            const ctf = document.querySelector('#ctf');

            desainWeb.addEventListener('click', function redirec() {
                window.location.href = '/dashboard/chart/desain-web';
            });
            pemrogramanMobile.addEventListener('click', function redirec() {
                window.location.href = '/dashboard/chart/pemrograman-mobile';
            });
            uiUx.addEventListener('click', function redirec() {
                window.location.href = '/dashboard/chart/ui-ux';
            });
            ctf.addEventListener('click', function redirec() {
                window.location.href = '/dashboard/chart/ctf';
            });
        </script>

        <script>
            const navbarToggler = document.querySelector('.navbar-toggler');
            const toggleNavbar = document.querySelector('.collapse');

            navbarToggler.addEventListener('click', function() {
                toggleNavbar.classList.toggle('show');
                if (toggleNavbar.classList.contains('show')) {
                    toggleNavbar.style.maxHeight = toggleNavbar.scrollHeight + 'px';
                    toggleNavbar.style.transition = 'max-height 0.3s ease-in-out';
                } else {
                    toggleNavbar.style.maxHeight = 0;
                    toggleNavbar.style.transition = 'max-height 0.3s ease-in-out';
                }
            });
        </script>
        <script>
            const icon = document.querySelector('.icon-container i');

            icon.addEventListener('mouseenter', () => {
                icon.classList.replace('fa-folder', 'fa-folder-open');
            });

            icon.addEventListener('mouseleave', () => {
                icon.classList.replace('fa-folder-open', 'fa-folder');
            });
        </script>
        <script src="https://chat-df7bc-default-rtdb.firebaseio.com/"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.jshttps://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
        <script src="/js/dashboard.js"></script>
        <script src="/js/api.js"></script>
</body>

</html>