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
    let ul = j('#deleteEmployeeModal').find(".list-data");
    ul.html('');

    arrayCheckBox.forEach((checkbox) => {
        let index = checkbox.value;
        if (checkbox.checked) {
            ul.append(
            `<li>
            <input type="hidden" name="id_mitra[]" value="${data_table[index]['id_mitra']}">
            ${data_table[index]['nama']}
            </li>`);
        }
    });
  });

  // delete kategori
  j(document).on("click", ".deleteKategoriButton", function () {
    let index = j(this).data('index');
    let ul = j('#deleteEmployeeModal').find(".list-data");
    ul.html(
    `<li>
      <input type="hidden" name="id_mitra[]" value="${data_table[index]['id_mitra']}"/>
      ${data_table[index]['nama']}
    </li>`);
  });

  // edit kategori
  j(document).on("click", ".editKategoriButton", function () {
    console.log('edit');
    // get index
    let index = j(this).data('index');

    j('#editEmployeeModal').find('[name="id_mitra"]').val(data_table[index]['id_mitra']);
    j('#editEmployeeModal').find('[name="nama"]').val(data_table[index]['nama']);
    j('#editEmployeeModal').find('[name="no_telp"]').val(data_table[index]['no_telp']);
    j('#editEmployeeModal').find('[name="email"]').val(data_table[index]['email']);
    j('#editEmployeeModal').find('[name="pendanaan"]').val(data_table[index]['pendanaan']);
  });

});