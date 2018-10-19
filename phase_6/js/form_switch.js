let newDataBtn = $('#newDataBtn');
let editDataBtn = $('#editDataBtn');

let newDataForm = $('#newDataForm');
let editDataForm = $('#editDataForm');

newDataBtn.on('click', () => {
  newDataForm.css('display', 'block');
  editDataForm.css('display', 'none');
})

editDataBtn.on('click', () => {
  newDataForm.css('display', 'none');
  editDataForm.css('display', 'block');
})
