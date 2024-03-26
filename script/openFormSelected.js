const buttonFormView = document.querySelectorAll('nav .btn-form');
const formSelected = document.querySelectorAll('.form-view');

formSelected.forEach(form =>{
  form.classList.add('hidden');
})

buttonFormView.forEach(button =>{
  button.addEventListener('click', ()=>{
    const fieldsetId = button.dataset.section;

    buttonFormView.forEach(btn=>{
      btn.classList.remove('active');
    })

    formSelected.forEach(form =>{
      form.classList.add('hidden');
    })

    button.classList.add('active');
    document.getElementById(fieldsetId).classList.remove('hidden');
  })
})