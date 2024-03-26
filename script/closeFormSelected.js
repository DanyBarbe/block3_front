const closesBtn = document.querySelectorAll('.close');
const buttons = document.querySelectorAll('.btn-form');

closesBtn.forEach(buttonClose => {
  buttonClose.addEventListener('click', () =>{
    const fieldsetIdClose = buttonClose.dataset.section;
    buttons.forEach(buttonForm =>{
      buttonForm.classList.remove('active');
    })

    document.getElementById(fieldsetIdClose).classList.add('hidden');
  })
})