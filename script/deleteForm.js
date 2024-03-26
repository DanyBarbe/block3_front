const deleteButtons = document.querySelectorAll('.btn-form-delete');
const deleteForms = document.querySelectorAll('.form-delete');

deleteForms.forEach(deleteField =>{
  deleteField.classList.add('hidden');
})

deleteButtons.forEach( deleteButton =>{
  deleteButton.addEventListener('click',()=>{
    const deleteFieldId = deleteButton.dataset.section;

    deleteButton.classList.add('active');
    document.getElementById(deleteFieldId).classList.remove('hidden');;
  })
})