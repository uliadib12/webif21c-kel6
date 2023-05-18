$(document).ready(function () {
  // Activate tooltip
  $('[data-toggle="tooltip"]').tooltip();

  // Select/Deselect checkboxes
  var checkbox = $('table tbody input[type="checkbox"]');
  $('#selectAll').click(function () {
    if (this.checked) {
      checkbox.each(function () {
        this.checked = true;
      });
    } else {
      checkbox.each(function () {
        this.checked = false;
      });
    }
  });
  checkbox.click(function () {
    if (!this.checked) {
      $('#selectAll').prop('checked', false);
    }
  });
});

$(document).ready(function () {
  // Tambah data
  $('form#addEmployeeModal').submit(function (e) {
    e.preventDefault();

    // Ambil nilai input
    var name = $(this).find("input[name='name']").val();
    var pendaftaran = $(this).find("input[name='pendaftaran']").val();
    var penyisihan = $(this).find("input[name='penyisihan']").val();
    var pengumuman = $(this).find("input[name='pengumuman']").val();
    var final = $(this).find("input[name='final']").val();

    // Validasi input (optional)
    if (name === '' || pendaftaran === '' || penyisihan === '' || pengumuman === '' || final === '') {
      alert('Harap lengkapi semua field!');
      return;
    }

    // Buat baris baru dalam tabel
    var newRow =
      '<tr>' +
      '<td>' +
      "<span class='custom-checkbox'>" +
      "<input type='checkbox' id='checkbox1' name='options[]' value='1'>" +
      "<label for='checkbox1'></label>" +
      '</span>' +
      '</td>' +
      '<td>' +
      name +
      '</td>' +
      '<td>' +
      pendaftaran +
      '</td>' +
      '<td>' +
      penyisihan +
      '</td>' +
      '<td>' +
      pengumuman +
      '</td>' +
      '<td>' +
      final +
      '</td>' +
      '<td>' +
      "<a href='#editEmployeeModal' class='edit' data-toggle='modal'>" +
      "<i class='fa-solid fa-pen-clip' data-toggle='tooltip' title='Edit'></i>" +
      '</a>' +
      "<a href='#deleteEmployeeModal' class='delete' data-toggle='modal'>" +
      "<i class='fa-solid fa-trash' data-toggle='tooltip' title='Delete'></i>" +
      '</a>' +
      '</td>' +
      '</tr>';

    // Tambahkan baris baru ke dalam tabel
    $('table tbody').append(newRow);

    // Reset form
    $(this).find("input[type='text'], input[type='datetime-local']").val('');

    // Tutup modal
    $('#addEmployeeModal').modal('hide');
  });

  // Edit data
  $('form#editEmployeeModal').submit(function (e) {
    e.preventDefault();

    // Ambil nilai input yang diubah
    var name = $(this).find("input[name='name']").val();
    var pendaftaran = $(this).find("input[name='pendaftaran']").val();
    var penyisihan = $(this).find("textarea[name='penyisihan']").val();
    var pengumuman = $(this).find("input[name='pengumuman']").val();
    var final = $(this).find("input[name='final']").val();

    // Validasi input (optional)
    if (name === '' || pendaftaran === '' || penyisihan === '' || pengumuman === '' || final === '') {
      alert('Harap lengkapi semua field!');
      return;
    }

    // Ambil baris yang akan diubah
    var row = $('table tbody tr.selected');

    // Update nilai kolom pada baris yang diubah
    row.find('td:nth-child(2)').text(name);
    row.find('td:nth-child(3)').text(pendaftaran);
    row.find('td:nth-child(4)').text(penyisihan);
    row.find('td:nth-child(5)').text(pengumuman);
    row.find('td:nth-child(6)').text(final);

    // Tutup modal
    $('#editEmployeeModal').modal('hide');
  });

  // Hapus data
  $('form#deleteEmployeeModal').submit(function (e) {
    e.preventDefault();

    // Ambil baris yang akan dihapus
    var row = $('table tbody tr.selected');

    // Hapus baris
    row.remove();

    // Tutup modal
    $('#deleteEmployeeModal').modal('hide');
  });

  // Pilih baris pada tabel
  $('table tbody').on('click', 'tr', function () {
    $(this).toggleClass('selected');
  });

  // Pilih semua baris
  $('#selectAll').change(function () {
    var checked = $(this).prop('checked');
    $('table tbody tr').toggleClass('selected', checked);
  });
});
