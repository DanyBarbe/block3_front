const buttons = document.querySelectorAll('nav .btn-add');
const fieldsets = document.querySelectorAll('fieldset');
const article = document.querySelector('article');

fieldsets.forEach(fieldset =>{
  fieldset.classList.add('hidden');
})
//
// buttons.forEach(button =>{
//   button.addEventListener('click', ()=>{
//     const fieldsetId = button.dataset.section;
//
//     buttons.forEach(btn =>{
//       btn.classList.remove('active');
//     })
//
//     fieldsets.forEach(field =>{
//       field.classList.add('hidden');
//     })
//
//     button.classList.add('active');
//     document.getElementById(fieldsetId).classList.remove('hidden');
//
//     if(!button.classList.contains('active')){
//       article.classList.add('hidden');
//     }else{
//       article.classList.remove('hidden');
//     }
//
//     buttons.forEach(btn =>{
//       console.log(btn.className);
//     })
//   })
// })
//
// buttons.forEach(button =>{
//   button.addEventListener('', ()=>{
//     if(button.classList.contains('active')){
//       button.classList.remove('active');
//       const fieldsetId = button.dataset.section;
//       document.getElementById(fieldsetId).classList.add('hidden');
//       article.classList.add('hidden');
//       buttons.forEach(btn =>{
//         console.log("hello " + btn.className);
//       })
//     }
//   })
// })