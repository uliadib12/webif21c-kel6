console.log(data_table);
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
        let index = checkbox.value;
        
        arrayId.push({
          kategori: data_table[index]['kategori'],
          id: data_table[index]['id']
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
    let index = j(this).data('index');
    let ul = j('#deleteEmployeeModal').find(".list-data");
    ul.html(
    `<li>
      <input type="hidden" name="id[]" value="${data_table[index]['id']}"/>
      ${data_table[index]['kategori']}
    </li>`);
  });

  // edit kategori
  j(document).on("click", ".editKategoriButton", function () {
    // get index
    let index = j(this).data('index');

    j('#editEmployeeModal').find('[name="id"]').val(data_table[index]['id']);
    j('#editEmployeeModal').find('[name="kategori"]').val(data_table[index]['kategori']);
    j('#editEmployeeModal').find('[name="pendaftaran"]').val(data_table[index]['pendaftaran']);
    j('#editEmployeeModal').find('[name="jamAwalPendaftaran"]').val(data_table[index]['jamAwalPendaftaran']);
    j('#editEmployeeModal').find('[name="jamAkhirPendaftaran"]').val(data_table[index]['jamAkhirPendaftaran']);
    j('#editEmployeeModal').find('[name="penyisihan"]').val(data_table[index]['penyisihan']);
    j('#editEmployeeModal').find('[name="jamAwalPenyisihan"]').val(data_table[index]['jamAwalPenyisihan']);
    j('#editEmployeeModal').find('[name="jamAkhirPenyisihan"]').val(data_table[index]['jamAkhirPenyisihan']);
    j('#editEmployeeModal').find('[name="pengumuman"]').val(data_table[index]['pengumuman']);
    j('#editEmployeeModal').find('[name="final"]').val(data_table[index]['final']);
  });

});