var j = jQuery.noConflict();
j(document).ready(function () {
  j('#checkbox_selectAll').change(function () {
    if (this.checked) {
      let arrayCheckBox = document.querySelectorAll('.checkbox');
      arrayCheckBox.forEach((checkbox) => {
        checkbox.checked = true;
      });
    }
    else {
      let arrayCheckBox = document.querySelectorAll('.checkbox');
      arrayCheckBox.forEach((checkbox) => {
        checkbox.checked = false;
      });
    }
  });

  j('#deletSelectCategory').on('click', function () {
    let arrayCheckBox = document.querySelectorAll('.checkbox');
    let arrayId = [];

    arrayCheckBox.forEach((checkbox) => {
      if (checkbox.checked) {
        let id = j(checkbox).parent().find('#id-kategori')[0].value;

        arrayId.push({
          kategori: checkbox.value,
          id: id
        }
        );
      }
    });

    let ul = j('#deleteEmployeeModal').find(".list-data");
    ul.html('');
    arrayId.forEach((arr) => {
      ul.append(
      `<li>
      <input type="hidden" name="id[]" value="${arr.id}">
      ${arr.kategori}
      </li>`);
    });
  });

  // delete kategori
  j(document).on("click", ".deleteKategoriButton", function () {
    let Id = j(this).data('id');
    let kategori = j(this).data('kategori');
    let ul = j('#deleteEmployeeModal').find(".list-data");
    ul.html(
    `<li>
      <input type="hidden" name="id[]" value="${Id}"/>
      ${kategori}
    </li>`);
  });

  // edit kategori
  j(document).on("click", ".editKategoriButton", function () {
    // get id
    let id = j(this).data('id');
    let kategori = j(this).data('kategori');
    let pendaftaran = j(this).data('pendaftaran');
    let jamAwalPendaftaran = j(this).data('jamawalpendaftaran');
    let jamAkhirPendaftaran = j(this).data('jamakhirpendaftaran');
    let penyisihan = j(this).data('penyisihan');
    let jamAwalPenyisihan = j(this).data('jamawalpenyisihan');
    let jamAkhirPenyisihan = j(this).data('jamakhirpenyisihan');
    let pengumuman = j(this).data('pengumuman');
    let final = j(this).data('final');
    
    j('#editEmployeeModal').find('[name="id"]').val(id);
    j('#editEmployeeModal').find('[name="kategori"]').val(kategori);
    j('#editEmployeeModal').find('[name="pendaftaran"]').val(pendaftaran);
    j('#editEmployeeModal').find('[name="jamAwalPendaftaran"]').val(jamAwalPendaftaran);
    j('#editEmployeeModal').find('[name="jamAkhirPendaftaran"]').val(jamAkhirPendaftaran);
    j('#editEmployeeModal').find('[name="penyisihan"]').val(penyisihan);
    j('#editEmployeeModal').find('[name="jamAwalPenyisihan"]').val(jamAwalPenyisihan);
    j('#editEmployeeModal').find('[name="jamAkhirPenyisihan"]').val(jamAkhirPenyisihan);
    j('#editEmployeeModal').find('[name="pengumuman"]').val(pengumuman);
    j('#editEmployeeModal').find('[name="final"]').val(final);
  });

});