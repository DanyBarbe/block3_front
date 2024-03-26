const buttonFormAll = document.querySelectorAll('.all .btn-form');

buttonFormAll.forEach(buttonAll =>{
  buttonAll.addEventListener('click', ()=>{
    const sectionId = button.dataset.section;

    if(!buttonAll.classList.contains('active')){
      button.classList.add('active');
      document.getElementById(sectionId).classList.remove('hidden');
    }else{
      button.classList.remove('active');
      document.getElementById(sectionId).classList.add('hidden');
    }
  })
})