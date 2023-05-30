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
          nama: data_table[index]['nama'],
          id: data_table[index]['id_event']
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
      ${arr.nama}
      </li>`);
    });
  });

  // delete kategori
  j(document).on("click", ".deleteKategoriButton", function () {
    let index = j(this).data('index');
    let ul = j('#deleteEmployeeModal').find(".list-data");
    ul.html(
    `<li>
      <input type="hidden" name="id[]" value="${data_table[index]['id_event']}"/>
      ${data_table[index]['nama']}
    </li>`);
  });

  // edit kategori
  j(document).on("click", ".editKategoriButton", function () {
    // get index
    let index = j(this).data('index');

    j('#editEmployeeModal').find('[name="id"]').val(data_table[index]['id_event']);
    j('#editEmployeeModal').find('[name="nama"]').val(data_table[index]['nama']);
    j('#editEmployeeModal').find('[name="informasi"]').val(data_table[index]['keterangan']);
    j('#editEmployeeModal').find('[name="tanggal"]').val(data_table[index]['tanggal']);
    j('#editEmployeeModal').find('[name="tempat"]').val(data_table[index]['tempat']);
    j('#editEmployeeModal').find('[name="penanggung_jawab"]').val(data_table[index]['penanggung_jawab']);
  });

});