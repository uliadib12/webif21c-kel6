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
      <input type="hidden" name="id" value="${arr.id}">
      ${arr.kategori}
      </li>`);
    });
  });

  j(document).on("click", ".deleteKategoriButton", function () {
    let Id = j(this).data('id');
    let kategori = j(this).data('kategori');
    let ul = j('#deleteEmployeeModal').find(".list-data");
    ul.html(
    `<li>
      <input type="hidden" name="id" value="${Id}">
      ${kategori}
    </li>`);
  });

  j("#modal-delete-button").on("click", function () {
    // get data from modal
    let arrayID = [];
    let ids = j('#deleteEmployeeModal')
    .find('.modal-dialog')
    .find('.modal-content')
    .find('.modal-body').
    find('.list-data').
    find('[name="id"]');

    ids.each(function () {
      arrayID.push(j(this).val());
    });

    // send data to server
    j.ajax({
      url: '/penjadwalan/delete',
      type: 'POST',
      data: {
        id: arrayID
      }});

    // reload page
    location.reload();
  });

});